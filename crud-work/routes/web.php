<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::get('/form/create', [FormController::class, 'create'])->name('form.create');
Route::post('/form', [FormController::class, 'store'])->name('form.store');
Route::get('/form/{form}/edit', [FormController::class, 'edit'])->name('form.edit');
Route::put('/form/{form}/update', [FormController::class, 'update'])->name('form.update');
Route::delete('/form/{form}/destroy', [FormController::class, 'destroy'])->name('form.destroy');
 