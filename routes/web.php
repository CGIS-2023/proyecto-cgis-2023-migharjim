<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::resources([
        
        'proveedores' => ProveedorController::class,
    ]);
    //Todos los usuarios pueden listar y ver el detalle de un médico
    Route::get('/proveedors', [ProveedorController::class, 'index'])->name('proveedors.index');
    Route::get('/proveedors/{proveedor}', [ProveedorController::class, 'show'])->name('proveedors.show');
});
