<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function sitios()
    {
        return view('sitios');
    }

    public function comunicaciones()
    {
        return view('comunicaciones');
    }

    public function folletos()
    {
        return view('folletos');
    }

    public function proyectos()
    {
        $proyectos = Proyecto::latest()->get(); // ajusta si necesitas otro orden
        return view('proyectos', compact('proyectos'));
    }
}
