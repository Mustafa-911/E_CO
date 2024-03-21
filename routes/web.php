<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
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

Route::get('/', [StaticController::class , 'Home'])->name('Home.index');
Route::get('/About', [StaticController::class , 'About'])->name('Home.About');
Route::get('/Portfolio', [StaticController::class , 'Portfolio'])->name('Home.Portfolio');
Route::get('/Contact', [StaticController::class , 'Contact'])->name('Home.Contact');
