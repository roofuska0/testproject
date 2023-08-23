<?php

use App\Http\Controllers\ProjectController;
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

Route::get('/', [ProjectController::class, 'index'])
    ->name('home');

Route::get('/projects/create', [ProjectController::class, 'create'])
    ->name('create');

Route::post('/projects', [ProjectController::class, 'store'])
    ->name('store');

Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])
    ->name('edit');

Route::put('/projects/{project}', [ProjectController::class, 'update'])
    ->name('update');

Route::delete('/projects/{project}', [ProjectController::class, 'delete'])
    ->name('delete');
