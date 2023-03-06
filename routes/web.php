<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SueldoController;

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
Auth::routes();
Route::resource('empleados', EmpleadoController::class);
Route::resource('roles', RoleController::class);
Route::resource('sueldos', SueldoController::class);
Route::resource('pagos', PagoController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
