<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the empresas.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $empresas = DB::table('empresas')->get();
        return response()->json($empresas, 200);
    }

    /**
     * Display the specified empresa.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $empresa = DB::table('empresas')->where('id', $id)->first();
        if (!$empresa) {
            return response()->json(['message' => 'Empresa não encontrada'], 404);
        }
        return response()->json($empresa, 200);
    }

    /**
     * Store a newly created empresa in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $id = DB::table('empresas')->insertGetId([
            'nome' => $request->input('nome'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $empresa = DB::table('empresas')->where('id', $id)->first();
        return response()->json($empresa, 201);
    }

    /**
     * Update the specified empresa in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $empresa = DB::table('empresas')->where('id', $id);

        if (!$empresa->exists()) {
            return response()->json(['message' => 'Empresa não encontrada'], 404);
        }

        $empresa->update([
            'nome' => $request->input('nome'),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Empresa atualizada com sucesso'], 200);
    }

    /**
     * Remove the specified empresa from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $empresa = DB::table('empresas')->where('id', $id);

        if (!$empresa->exists()) {
            return response()->json(['message' => 'Empresa não encontrada'], 404);
        }

        $empresa->delete();

        return response()->json(['message' => 'Empresa excluída com sucesso'], 200);
    }
}
