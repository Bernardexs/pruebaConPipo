<?php

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
// routes/web.php

use App\Http\Controllers\productosController;

// Ruta para mostrar la lista de productos
Route::get('/productos', [productosController::class, 'index'])->name('productos.index');

// Ruta para mostrar el formulario de creación de productos
Route::get('/productos/create', [productosController::class, 'create'])->name('productos.create');

// Ruta para guardar un nuevo producto
Route::post('/productos', [productosController::class, 'store'])->name('productos.store');

// Ruta para mostrar el formulario de edición de un producto
Route::get('/productos/{id}/edit', [productosController::class, 'edit'])->name('productos.edit');

// Ruta para actualizar un producto existente
Route::put('/productos/{id}', [productosController::class, 'update'])->name('productos.update');

// Ruta para eliminar un producto
Route::delete('/productos/{id}', [productosController::class, 'destroy'])->name('productos.destroy');

Route::get('/', function () {
    return view('welcome');
});
