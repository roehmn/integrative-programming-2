<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WebController;

Route::get('/home', [WebController::class, 'home']);