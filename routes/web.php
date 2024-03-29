<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\MiembroController;
use App\Http\Controllers\MinisterioController;
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

//Route::get('/', function () {return view('index');})->middleware('auth');;

//PROBANDO USUARIO GUEST Y USUARIO REGISTRADO

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::get('/asistencias/reportes', [AsistenciaController::class, 'reportes'])->name('reportes');
    Route::get('/asistencias/pdf', [AsistenciaController::class, 'pdf'])->name('pdf');
    Route::get('/asistencias/pdf_fechas', [AsistenciaController::class, 'pdf_fechas'])->name('pdf_fechas');
    Route::get('/miembros/reportes', [MiembroController::class, 'reportes'])->name('reportes');
    Route::get('/miembros/pdf', [MiembroController::class, 'pdf'])->name('pdf');
    Route::get('/miembros/pdf_fechas', [MiembroController::class, 'pdf_fechas'])->name('pdf_fechas');
    Route::get('/ministerios/reportes', [MinisterioController::class, 'reportes'])->name('reportes');
    Route::get('/ministerios/pdf', [MinisterioController::class, 'pdf'])->name('pdf');
    Route::get('/ministerios/pdf_fechas', [MinisterioController::class, 'pdf_fechas'])->name('pdf_fechas');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

//Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
//Route::get('/asistencias/reportes', [AsistenciaController::class, 'reportes'])->name('reportes');
//Route::get('/asistencias/pdf', [AsistenciaController::class, 'pdf'])->name('pdf');
//Route::get('/asistencias/pdf_fechas', [AsistenciaController::class, 'pdf_fechas'])->name('pdf_fechas');
//Route::get('/miembros/reportes', [MiembroController::class, 'reportes'])->name('reportes');
//Route::get('/miembros/pdf', [MiembroController::class, 'pdf'])->name('pdf');
//Route::get('/miembros/pdf_fechas', [MiembroController::class, 'pdf_fechas'])->name('pdf_fechas');
//Route::get('/ministerios/reportes', [MinisterioController::class, 'reportes'])->name('reportes');
//Route::get('/ministerios/pdf', [MinisterioController::class, 'pdf'])->name('pdf');
//Route::get('/ministerios/pdf_fechas', [MinisterioController::class, 'pdf_fechas'])->name('pdf_fechas');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes(['register' => false]);


Route::resource('/miembros', \App\Http\Controllers\MiembroController::class)->middleware('can:miembros');
Route::resource('/ministerios', \App\Http\Controllers\MinisterioController::class)->middleware('can:ministerios');
Route::resource('/usuarios', \App\Http\Controllers\UserController::class)->middleware('can:usuarios');
Route::resource('/asistencias', \App\Http\Controllers\AsistenciaController::class);
Route::resource('/pagos', \App\Http\Controllers\PagoController::class);

//Route::get('/miembros', function () {return view('miembros.index');})->middleware('auth');;

//Route::get('/miembros/create', function () {return view('miembros.create');})->middleware('auth');;