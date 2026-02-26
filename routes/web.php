<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;




Route::get('/', [DashboardController::class, 'home'])->name('home');

Route::get('/sitios', [DashboardController::class, 'sitios'])->name('sitios');
Route::get('/comunicaciones', [DashboardController::class, 'comunicaciones'])->name('comunicaciones');
Route::get('/proyectos', [DashboardController::class, 'proyectos'])->name('proyectos');
Route::get('/folletos', [DashboardController::class, 'folletos'])->name('folletos');

