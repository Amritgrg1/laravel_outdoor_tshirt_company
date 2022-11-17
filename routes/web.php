<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutdoorController;

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

Route::get('/', [OutdoorController::class, 'index']);

Route::post('/save-Todo', [OutdoorController::class, 'saveTodo'])->name('saveTodo');

Route::post('delete/{id}', [OutdoorController::class, 'delete'])->name('delete');

Route::get('/edit/{id}', [OutdoorController::class, 'edit'])->name('edit');

Route::post('/edit', [OutdoorController::class, 'update'])->name('update');

