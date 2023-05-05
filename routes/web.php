<?php

use App\Http\Controllers\ObjetoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EncargadoController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::middleware(['auth'])->group(function () {
    Route::resources([      
        'proveedors' => ProveedorController::class,
    ]);

    Route::post('/proveedors/{proveedor}/attach-objeto', [ProveedorController::class, 'attach_objeto'])
        ->name('proveedors.attach_objeto');
    Route::delete('/proveedors/{proveedor}/detach_objeto/{objeto}', [ProveedorController::class, 'detach_objeto'])
        ->name('proveedors.detach_objeto');





    Route::resources([      
        'objetos' => ObjetoController::class,
    ]);

    Route::resources([      
        'tipo_objetos' => TipoObjetoController::class,
    ]);
    Route::resources([      
        'encargados' => EncargadoController::class,
    ]);
// });
