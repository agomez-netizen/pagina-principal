<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;

class AgendaController extends Controller
{
public function index(Request $request)
{
    $tipos = DB::table('tb_tipo_folleto')
        ->orderBy('nombre')
        ->get();

    $query = DB::table('tb_folletos')
        ->leftJoin(
            'tb_tipo_folleto',
            'tb_tipo_folleto.id',
            '=',
            'tb_folletos.id_tipo_folleto'
        )
        ->select(
            'tb_folletos.*',
            'tb_tipo_folleto.nombre as tipo_folleto'
        );

    if ($request->filled('desde')) {
        $query->whereDate('tb_folletos.fecha', '>=', $request->desde);
    }

    if ($request->filled('hasta')) {
        $query->whereDate('tb_folletos.fecha', '<=', $request->hasta);
    }

    if ($request->filled('id_tipo_folleto')) {
        $query->where('tb_folletos.id_tipo_folleto', $request->id_tipo_folleto);
    }

    $folletos = $query
        ->orderByDesc('tb_folletos.fecha')
        ->paginate(10)
        ->withQueryString();

    return view('principal.agendas', compact(
        'folletos',
        'tipos'
    ));
}

    public function exportar(Request $request)
    {
        // Aquí irá la exportación a Word.
        return back()->with('success', 'Pendiente de implementar.');
    }
}
