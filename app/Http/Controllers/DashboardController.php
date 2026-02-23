<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;

class DashboardController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::where('activo', 1)
            ->orderBy('id_proyecto', 'desc')
            ->get();

        return view('principal.principal', compact('proyectos'));
    }
}
