<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

use App\Models\Product;
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
Route::get('/', function () {
    return view('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});  

Route::view('/registro', 'register')->name('registro');
Route::view('/privada', 'secret')->middleware('auth')->name('privada');

Route::post('/validar-registro',[LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', ([LoginController::class, 'login']))->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/product', LoginController::class);
