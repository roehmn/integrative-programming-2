<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $title = "Welcome to My Blade Page";
        return view('web', compact('title'));
    }
}