<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/screen/{screen}', [DashboardController::class, 'screen']);
Route::get('/search', [DashboardController::class, 'search']);
Route::post('/toggle-square', [DashboardController::class, 'toggleSquare']);