<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
//Route::get('/', function () {
//    Auth::user();
////    return view('welcome');
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tasks', TaskController::class, [
    'except' => 'update', 'show'
]);

