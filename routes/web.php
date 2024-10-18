<?php

use App\Http\Controllers\TestController;
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
    return view('index');  // Ruta de Bienvenida
})->name('index'); 

Route::get('/products', function () {
    return view('products_index');  // Ruta de Productos
})->name('products');

Route::get('/clients', function () {
    return view('clients_index');  // Ruta de Clientes
})->name('clients');

Route::get('/sales', function () {
    return view('sales_index');  // Ruta de Ventas
})->name('sales');