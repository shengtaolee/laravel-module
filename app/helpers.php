<?php

declare(strict_types=1);

/**
 * Created by PhpStorm
 * Created at 2021/10/14 16:13
 * @author santo.li
 * @contact lishengtao001@Gmail.com
 */

if (!function_exists('mview')) {
    function mview(string $module, string $name, array $data = [])
    {
        $path = base_path(sprintf('modules/%s/Views', ucfirst($module)));
        $name = str_replace('.', '/', $name);
        $filePath = sprintf('%s/%s.blade.php', $path, $name);
        return View::file($filePath, $data);
    }
}

if (!function_exists('module_path')) {
    function module_path($path = '')
    {
        $path = 'modules';
        if (!empty($path)) {
            $path = '/' . $path;
        }

        return base_path($path);
    }
}
