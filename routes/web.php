<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductosController;

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
    return view('Interfaz');
});
//Rutas del proveedor
route::get('/Proveedores', [ProveedorController::class, 'index_pro'])->name('Proveedores_medic');
route::get('/Proveedores/Crear_Prove', [ProveedorController::class, 'creaProve'])->name('Proveedor_adic');
route::post('Proveedores/crearprove',[ProveedorController::class, 'crea_Prove'])->name('adicion_proveedor');
route::get('/Proveedores/editar_prove/{id}', [ProveedorController::class, 'edit_prove'])->name('edicion_proveedor');
route::put('Proveedores/eliminacion_prove', [ProveedorController::class, 'eliminar_prove'])->name('actualizar_proveedor');
route::get('/Proveedores/eliminacion/{id}', [ProveedorController::class, 'eliminacion'])->name('eliminacion_Proveedor');

//Rutas del Cliente
route::get('/Clientes', [ClientesController::class, 'index_cli'])->name('Clientes_farma');
route::get('/Clientes/Crear_Clien', [ClientesController::class, 'creaClien'])->name('Clientes_adic');
route::post('Clientes/crearclien',[ClientesController::class, 'crea_Clien'])->name('adicion_cliente');
route::get('/Clientes/editar_cli/{id}', [ClientesController::class, 'edit_clien'])->name('edicion_cliente');
route::put('Clientes/eliminacion_cli', [ClientesController::class, 'eliminar_cli'])->name('actualizar_cliente');
route::get('/Clientes/eliminacion/{id}', [ClientesController::class, 'eliminacion'])->name('eliminacion_cliente');

//Rutas de Categoria
route::get('/Categorias', [CategoriaController::class, 'index_cate'])->name('Categorias_prod');
route::get('/Categorias/Crear_Categoria', [CategoriaController::class, 'creaCate'])->name('Categoria_adic');
route::post('Categorias/crearcategoria',[CategoriaController::class, 'crea_Cate'])->name('adicion_Categoria');
route::get('/Categorias/editar_cate/{id}', [CategoriaController::class, 'Edit_cate'])->name('edicion_Categoria');
route::put('Categorias/eliminacion_cate', [CategoriaController::class, 'Eliminar_Cate'])->name('actualizar_Categoria');
route::get('/Categorias/eliminacion/{id}', [CategoriaController::class, 'Eliminacion'])->name('eliminacion_Categoria');

//Rutas de Productos
route::get('/Productos', [ProductosController::class, 'index_produc'])->name('Productos_prin');
route::get('/Productos/Crear_Producto', [ProductosController::class, 'creaProd'])->name('Producto_adic');
route::post('Productos/crearProducto',[ProductosController::class, 'crea_Prod'])->name('adicion_Producto');
route::get('/Productos/editar_Prod/{id}', [ProductosController::class, 'edit_prod'])->name('edicion_Producto');
route::put('Productos/eliminacion_Prod', [ProductosController::class, 'eliminar_Prod'])->name('actualizar_Producto');
route::get('/Productos/eliminacion/{id}', [ProductosController::class, 'eliminacion'])->name('eliminacion_Producto');
