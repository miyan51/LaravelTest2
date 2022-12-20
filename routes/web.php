<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index']);
Route::post('/tests', [TestController::class, 'addTest']);




