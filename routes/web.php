<?php

use App\Http\Controllers\HasabController;
use App\Http\Controllers\MainDashboardController;
use App\Http\Controllers\TermsController;
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

Route::get('/',[MainDashboardController::class, 'index'])->name('dashboard');
Route::post('/post',[HasabController::class, 'store'])->name('hasab.create');
Route::delete('/delete/{id}',[HasabController::class, 'destroy'])->name('hasab.destroy');


Route::get('/terms', [TermsController::class, 'index']);
