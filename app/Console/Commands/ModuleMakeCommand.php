<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ModuleMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:create
                            {name : 模块名称}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '创建模块目录结构';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        if (empty($name)) {
            $this->error('name can not be empty.');
            return Command::FAILURE;
        }

        $modulePath = base_path('modules/' . $name);

        $this->createModuleDir($modulePath);
        $this->createConsoleDir($modulePath);
        $this->createHttpDir($modulePath);
        $this->createModelDir($modulePath);
        $this->createViewDir($modulePath);
        $this->createRouteFile($modulePath);

        return Command::SUCCESS;
    }

    protected function createModuleDir($modulePath)
    {
        !\File::exists($modulePath) && \File::makeDirectory($modulePath);
    }

    protected function createConsoleDir($modulePath)
    {
        $consolePath = $modulePath . '/Console';
        $commandPath = $consolePath . '/Commands';
        !\File::exists($consolePath) && \File::makeDirectory($consolePath);
        !\File::exists($commandPath) && \File::makeDirectory($commandPath);
    }

    protected function createHttpDir($modulePath)
    {
        $httpPath = $modulePath . '/Http';
        $controllerPath = $httpPath . '/Controllers';
        $middlewarePath = $httpPath . '/Middleware';
        !\File::exists($httpPath) && \File::makeDirectory($httpPath);
        !\File::exists($controllerPath) && \File::makeDirectory($controllerPath);
        !\File::exists($middlewarePath) && \File::makeDirectory($middlewarePath);
    }

    public function createModelDir($modulePath)
    {
        $modelPath = $modulePath . '/Models';
        !\File::exists($modelPath) && \File::makeDirectory($modelPath);
    }

    public function createViewDir($modulePath)
    {
        $viewPath = $modulePath . '/Views';
        !\File::exists($viewPath) && \File::makeDirectory($viewPath);
    }

    public function createRouteFile($modulePath)
    {
        $routePath = $modulePath . '/routes.php';
        !\File::exists($routePath) && file_put_contents($routePath, '');
    }
}
