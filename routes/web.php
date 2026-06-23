<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformeWordController;




Route::get('/', [DashboardController::class, 'home'])->name('home');

Route::get('/sitios', [DashboardController::class, 'sitios'])->name('sitios');
Route::get('/comunicaciones', [DashboardController::class, 'comunicaciones'])->name('comunicaciones');
Route::get('/proyectos', [DashboardController::class, 'proyectos'])->name('proyectos');
Route::get('/folletos', [DashboardController::class, 'folletos'])->name('folletos');

Route::get('/informe-word', [InformeWordController::class, 'index'])->name('informe.word.index');
Route::post('/informe-word/exportar', [InformeWordController::class, 'exportar'])->name('informe.word.exportar');

