<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerfortasks;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\controllerfortasks@index');

Route::get('/tasks', 'App\Http\Controllers\controllerfortasks@index');

// Route::get('/tasks/create', 'App\Http\Controllers\controllerfortasks@create');
// Code below shows another method of writing a route using a controller
Route::get('/tasks/create', [controllerfortasks::class, 'create']);

Route::post('/tasks', 'App\Http\Controllers\controllerfortasks@store');

Route::patch('/tasks/{id}', [controllerfortasks::class, 'update']);

Route::delete('/tasks/{id}', [controllerfortasks::class, 'delete']);