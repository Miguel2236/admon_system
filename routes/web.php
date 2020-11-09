<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\SectionController;


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// users
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user_edit');

Route::get('/user/list', [UserController::class, 'index'])->name('user_list');

Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user_update');

// departament
Route::get('/departament/list', [DepartamentController::class, 'index'])->name('departament_list');

Route::post('/departament/store', [DepartamentController::class, 'store'])->name('departament_store');

// modules
Route::get('/module/list', [ModuleController::class, 'index'])->name('module_list');

Route::get('/module/show', [ModuleController::class, 'get_list'])->name('module_show');

Route::post('/module/store', [ModuleController::class, 'store'])->name('module_store');

// profiles
Route::get('/profile/list', [ProfilesController::class, 'index'])->name('profiles_list');

// secciones
Route::get('/section/new/{id}', [SectionController::class, 'create'])->name('section_create');

Route::post('/section/store', [SectionController::class, 'store'])->name('section_store');

Route::get('/section/list/{id}', [SectionController::class, 'index'])->name('section_list');

