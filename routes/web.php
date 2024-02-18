<?php

use App\Http\Controllers\ListeController;
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

Route::get('/',[ListeController::class, 'index'])->name('index');
Route::post('/',[ListeController::class, 'store'])->name('store');
Route::delete('/{liste:id}',[ListeController::class, 'destroy'])->name('destroy');
