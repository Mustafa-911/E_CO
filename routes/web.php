<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputresController;
use App\Models\Computer;
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

Route::get('/', [StaticController::class, 'Home'])->name('Home.index');
Route::get('/About', [StaticController::class, 'About'])->name('Home.About');
Route::get('/computers.Show', [StaticController::class, 'Show'])->name('Home.Show');
Route::get('/Contact', [StaticController::class, 'Contact'])->name('Home.Contact');
Route::get('/computers.Create', [StaticController::class, 'Create'])->name('Home.Create');
Route::get('/computers.index', [StaticController::class, 'Index'])->name('Home.Index');

Route::post('/computers.store', function () {
    $computer = new Computer();

    $computer->Name = request('computer-Name');
    $computer->Origin = request('computer-Origin');
    $computer->Price = request('computer-Price');

    $computer->save();

    return redirect()->route('Home.Create');
});

Route::get('computer', [ComputresController::class, 'index'])->name('Home.res');
