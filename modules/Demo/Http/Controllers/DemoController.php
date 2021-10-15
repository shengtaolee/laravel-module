<?php

namespace Modules\Demo\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public static function index(Request $request)
    {
        return mview('demo', 'demo.index', ['value' => 'hello world']);
    }
}
