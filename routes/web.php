<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\Carreras\ComercializacionController;
use App\Http\Controllers\Pages\Carreras\RoboticaController;
use App\Http\Controllers\Pages\Carreras\SistemasController;
use App\Http\Controllers\Pages\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('sobre-nosotros', [AboutController::class,'index'])->name('sobre-nosotros');

// ------ Carreras ------
Route::get('carreras/sistemas', [SistemasController::class,'index'])->name('pages.carreras.sistemas');
Route::get('carreras/robotica', [RoboticaController::class,'index'])->name('pages.carreras.robotica');
Route::get('carreras/comercializacion', [ComercializacionController::class,'index'])->name('pages.carreras.comercializacion');

Route::get('contacto', function () {
    return view('pages.contacto');
})->name('contacto');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
