<?php

declare(strict_types=1);

/**
 * Created by PhpStorm
 * Created at 2021/10/14 15:47
 * @author santo.li
 * @contact lishengtao001@Gmail.com
 */

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'demo'], __DIR__ . '/Demo/routes.php');
