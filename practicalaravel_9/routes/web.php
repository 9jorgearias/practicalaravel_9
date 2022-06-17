<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

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
    return view('prueba.principal');
});

Route::get('/jorge', function () {
    return view('prueba.jorge');
});


// Route::get('/index', function () {
//     return view('empleados.index');
// });
Route::get('/crear', function () {
    return view('empleados.crear');
});

Route::get('/mostrar', function () {
    return view('empleados.mostar');
});

Route::get('/editar', function () {
    return view('empleados.editar');
});



Route::get('empleados', [EmpleadosController::class, 'index'])->name('empleadoIndex');
Route::get('empleados/crear', [EmpleadosController::class, 'crear'])->name('empleadoCrear');
Route::get('empleados/mostrar', [EmpleadosController::class, 'mostrar'])->name('empleadoMostrar');
Route::get('empleados/editar', [EmpleadosController::class, 'editar'])->name('empleadoEditar');

