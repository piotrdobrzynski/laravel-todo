<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [TodoController::class, 'index']);
Route::get('/edit/{id}', [TodoController::class, 'edit']);
Route::get('/change/{id}', [TodoController::class, 'change']);

Route::post('/upload', [TodoController::class, 'upload']);
Route::post('/update', [TodoController::class, 'update']);
