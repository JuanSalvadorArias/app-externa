<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function () {

    // home
    Route::get('/home', [TaskController::class, 'index'])->name('home');

    // guardar nueva tarea en la base de datos
    Route::post('/store', [TaskController::class, 'store'])->name('home.store');

    // mostrar datos de la tarea
    Route::get('/show/{id}', [TaskController::class, 'show'])->name('home.show');

    // actualizar datos de la tarea
    Route::put('/update/{id}', [TaskController::class, 'update'])->name('home.update');

    // eliminar datos de la tarea
    Route::delete('/destroy/{id}', [TaskController::class, 'destroy'])->name('home.destroy');
});
