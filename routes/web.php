<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfilesController;


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user_edit');

Route::get('/user/list', [UserController::class, 'index'])->name('user_list');

Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user_update');

Route::get('/departament/list', [DepartamentController::class, 'index'])->name('departament_list');

Route::post('/departament/store', [DepartamentController::class, 'store'])->name('departament_store');

Route::get('/module/list', [ModuleController::class, 'index'])->name('module_list');

Route::get('/profile/list', [ProfilesController::class, 'index'])->name('profiles_list');

