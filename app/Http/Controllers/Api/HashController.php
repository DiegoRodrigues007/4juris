<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HashController extends Controller
{
    // Listar todos os hashes de uma empresa
    public function index(Request $request)
    {
        // Obter o ID da empresa a partir do usuário autenticado
        $empresaId = $request->user()->empresa_id;

        // Consultar hashes pelo Query Builder
        $hashes = DB::table('hashes')
            ->where('empresa_id', $empresaId) // Filtrando pelo empresa_id diretamente
            ->get();

        return response()->json($hashes);
    }

    // Outros métodos (store, update, destroy) também devem seguir a mesma lógica
}
