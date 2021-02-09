<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clientes', [clientesController::class, 'getClientes'])->middleware(['auth'])->name('cliente');

Route::get('/clientes/new', [clientesController::class, 'create'])->middleware(['auth'])->name('formCliente');

Route::post('/clientes/new', [clientesController::class, 'store'])->middleware(['auth'])->name('novoCliente');

Route::post('/clientes/delete/{id}', [clientesController::class, 'destroy'])->middleware(['auth'])->name('deleteCliente');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
