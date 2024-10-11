<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the empresas.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Empresa::all(), 200);
    }

    public function show(Empresa $empresa)
    {
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

        $empresa = Empresa::create($request->only('nome'));

        return response()->json($empresa, 201);
    }

    /**
     * Update the specified empresa in storage.
     *
     * @param Request $request
     * @param Empresa $empresa
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Empresa $empresa)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $empresa->update($request->only('nome'));

        return response()->json($empresa, 200);
    }


    /**
     * Remove the specified empresa from storage.
     *
     * @param Empresa $empresa
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();

        return response()->json(['message' => 'Empresa excluída com sucesso'], 200);
    }
}
