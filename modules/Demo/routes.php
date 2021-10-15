<?php

declare(strict_types=1);

/**
 * Created by PhpStorm
 * Created at 2021/10/14 15:45
 * @author santo.li
 * @contact lishengtao001@Gmail.com
 */

use Illuminate\Support\Facades\Route;
use Modules\Demo\Http\Controllers\DemoController;

Route::get('/', [DemoController::class, 'index']);
