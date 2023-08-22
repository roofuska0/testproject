<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\ProjectController::class, 'index'])
    ->name('home');

Route::get('/create', [\App\Http\Controllers\ProjectController::class, 'create'])
    ->name('create');

Route::get('/project/{id}', [\App\Http\Controllers\ProjectController::class, 'edit'])
    ->name('edit');
