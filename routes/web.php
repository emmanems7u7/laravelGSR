<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
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


Route::get('/', [DocenteController::class,'inicio'])->name('HOME');
Route::get('Docentes', [DocenteController::class,'showDocentes'])->name('docentes.show');
Route::get('materias', [DocenteController::class,'ShowMaterias'])->name('materias.show');
Route::get('encuestas', [DocenteController::class,'ShowEncuestas'])->name('encuestas.show');
Route::get('DocentesM/{id}', [DocenteController::class,'DocentesMateria'])->name('docentesMat.show');
Route::get('Docentes/prom/{id}', [DocenteController::class,'Mpromediodoc'])->name('mejorPromedio.show');

Route::get('Docentes/resultado/{id}', [DocenteController::class,'ResultadoDocente'])->name('Redocentes.show');

Route::get('materias/doc', [DocenteController::class,'ShowDocSemestre'])->name('docsemestre.show');
Route::get('materiasDocentes/{id}', [DocenteController::class,'MatDocentes'])->name('DocentesDeMateria.show');
Route::get('Docentessemestre/{n}', [DocenteController::class,'verDoc'])->name('verDocSem.show');

Auth::routes();

//oute::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
