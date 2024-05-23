<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\VentaTratamientoController;
use App\Http\Controllers\VeterinarioController;
use App\Models\Cliente;
use App\Models\Mascota;
use App\Models\Veterinario;
use Illuminate\Database\Eloquent\MassAssignmentException;
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

//CLIENTES
Route::get('/Cliente',[ClienteController::class,'index'])-> name('Cliente.index');
//Agregar clientes 
Route::get('/Cliente/create',[ClienteController::class, 'create'])->name('Cliente.create');
Route::get('/Cliente/{id}',[ClienteController::class,'show'])-> name('Cliente.show');
// Guardar clientes
Route::post('/Cliente/save',[ClienteController::class,'store'])-> name('Cliente.store');
//  Borrar clientes 
Route::delete('/Cliente/delete/{id}', [ClienteController::class,'destroy'])->name('Cliente.destroy');
// cliente editar y actualizar 
Route::get('/Cliente/edit/{id}',[ClienteController::class, 'edit'])->name('Cliente.edit');
Route::put('/Cliente/update/{id}',[ClienteController::class,'update'])->name('Cliente.update');

//MASCOTAS
Route::get('/Mascota',[MascotaController::class,'index'])-> name('Mascota.index');
//Agregar mascotas
Route::get('/Mascota/create',[MascotaController::class, 'create'])->name('Mascota.create');
Route::get('/Mascota/{id}',[MascotaController::class,'show'])-> name('Mascota.show');
// Guardar mascotas
Route::post('/Mascota/save',[MascotaController::class,'store'])-> name('Mascota.store');
//  Borrar mascotas
Route::delete('/Mascotas/delete/{id}', [MascotaController::class,'destroy'])->name('Mascota.destroy');
// mascota editar y actualizar 
Route::get('/Mascota/edit/{id}',[MascotaController::class, 'edit'])->name('Mascota.edit');
Route::put('/Mascota/update/{id}',[MascotaController::class,'update'])->name('Mascota.update');

//CONSULTAS
Route::get('/Consulta',[ConsultaController::class,'index'])-> name('Consultas.index');
//  agregar 
Route::get('/Consulta/create',[ConsultaController::class, 'create'])->name('Consultas.create');
Route::get('/Consulta/{id}',[ConsultaController::class,'show'])-> name('Consultas.show');
// guardar 
Route::post('/Consulta/save',[ConsultaController::class,'store'])-> name('Consultas.store');
Route::get('/Consulta/edit/{id}',[ConsultaController::class, 'edit'])->name('Consulta.edit');
Route::delete('/Consulta/delete/{id}', [ConsultaController::class,'destroy'])->name('Consulta.destroy');
Route::put('/Consulta/update/{id}',[ConsultaController::class,'update'])->name('Consulta.update');

//VETERINARIOS
Route::get('/Veterinario',[VeterinarioController::class,'index'])-> name('Veterinario.index');
//Agregar Veterinario
Route::get('/Veterinario/create',[VeterinarioController::class, 'create'])->name('Veterinario.create');
Route::get('/Veterinario/{id}',[VeterinarioController::class,'show'])-> name('Veterinario.show');
// Guardar Veterinario
Route::post('/Veterinario/save',[VeterinarioController::class,'store'])-> name('Veterinario.store');
//  Borrar Veterinario
Route::delete('/Veterinario/delete/{id}', [VeterinarioController::class,'destroy'])->name('Veterinario.destroy');
// Veterinario editar y actualizar 
Route::get('/Veterinario/edit/{id}',[VeterinarioController::class, 'edit'])->name('Veterinario.edit');
Route::put('/Veterinario/update/{id}',[VeterinarioController::class,'update'])->name('Veterinario.update');

//TRATAMIENTOS
Route::get('/Tratamiento',[TratamientoController::class,'index'])-> name('Tratamiento.index');
//Agregar Veterinario
Route::get('/Tratamiento/create',[TratamientoController::class, 'create'])->name('Tratamiento.create');
Route::get('/Tratamiento/{id}',[TratamientoController::class,'show'])-> name('Tratamiento.show');
// Guardar Veterinario
Route::post('/Tratamiento/save',[TratamientoController::class,'store'])-> name('Tratamiento.store');
//  Borrar Veterinario
Route::delete('/Tratamiento/delete/{id}',[TratamientoController::class,'destroy'])->name('Tratamiento.destroy');
// Veterinario editar y actualizar 
Route::get('/Tratamiento/edit/{id}',[TratamientoController::class, 'edit'])->name('Tratamiento.edit');
Route::put('/Tratamiento/update/{id}',[TratamientoController::class,'update'])->name('Tratamiento.update');

//VENTA TRATAMIENTO
Route::get('/VentaTratamiento',[VentaTratamientoController::class,'index'])-> name('VentaTratamiento.index');
//Agregar Veterinario
Route::get('/VentaTratamiento/create',[VentaTratamientoController::class, 'create'])->name('VentaTratamiento.create');
Route::get('/VentaTratamiento/{id}',[VentaTratamientoController::class,'show'])-> name('VentaTratamiento.show');
// Guardar Veterinario
Route::post('/VentaTratamiento/save',[VentaTratamientoController::class,'store'])-> name('VentaTratamiento.store');
//  Borrar Veterinario
Route::delete('/VentaTratamiento/delete/{id}', [VentaTratamientoController::class,'destroy'])->name('VentaTratamiento.destroy');
// Veterinario editar y actualizar 
Route::get('/VentaTratamiento/edit/{id}',[VentaTratamientoController::class, 'edit'])->name('VentaTratamiento.edit');
Route::put('/VentaTratamiento/update/{id}',[VentaTratamientoController::class,'update'])->name('VentaTratamiento.update');