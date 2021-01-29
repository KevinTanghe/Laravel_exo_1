<?php

use App\Http\Controllers\KevinController;
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
Route::get('/', [KevinController::class, 'index']);

Route::get('/about', [KevinController::class, 'about']);

Route::get('/product', [KevinController::class, 'product']);

Route::get('/store', [KevinController::class, 'store']);
