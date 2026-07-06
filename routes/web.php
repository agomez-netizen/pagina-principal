<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformeWordController;
use App\Http\Controllers\AgendaController;



Route::get('/', [DashboardController::class, 'home'])->name('home');

Route::get('/sitios', [DashboardController::class, 'sitios'])->name('sitios');
Route::get('/comunicaciones', [DashboardController::class, 'comunicaciones'])->name('comunicaciones');
Route::get('/proyectos', [DashboardController::class, 'proyectos'])->name('proyectos');

//Route::get('/informe-word', [InformeWordController::class, 'index'])->name('informe.word.index');
//Route::post('/informe-word/exportar', [InformeWordController::class, 'exportar'])->name('informe.word.exportar');


Route::get('/agendas', [AgendaController::class, 'index'])->name('agendas.index');
Route::post('/agendas/exportar', [AgendaController::class, 'exportar'])->name('agendas.exportar');


Route::get('/folletos', [DashboardController::class, 'folletos'])->name('folletos');

Route::get('/agendas', [AgendaController::class, 'index'])->name('agendas.index');
Route::post('/agendas/exportar', [AgendaController::class, 'exportar'])->name('agendas.exportar');
