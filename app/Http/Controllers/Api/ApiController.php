<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ApiController extends Controller
{
    public function dadosCliente(Request $request) //listar os dados do perfil do cliente para serem usados no movel
    {
        $user = $request->user();

        // Verifica se é cliente
        if ($user->tipo_usuario !== 'Cliente') {
            return response()->json([
                'message' => 'O usuário logado não é um cliente.'
            ], 403);
        }

        // Procura o cliente pelo user logado
        $cliente = Cliente::where('users_id', $user->id)
            ->with('user')
            ->first();

        // Se não encontrar
        if (!$cliente) {
            return response()->json([
                'message' => 'Cadastro de cliente não encontrado.'
            ], 404);
        }

        return response()->json([
            'user' => $cliente->user,
            'cliente' => $cliente
        ], 200);
    }


    //-----------------------------------------------------------------


    public function planoAlimentar(Request $request) //listar o plano alimentar juntamente com as refeicoes desse cliente logado no movel
    {
        $user = $request->user();

        // Verifica se é cliente
        if ($user->tipo_usuario !== 'Cliente') {
            return response()->json([
                'message' => 'O usuário logado não é um cliente.'
            ], 403);
        }

        // Busca o cliente e o plano com as refeições
        $cliente = Cliente::where('users_id', $user->id)
            ->with('planoAlimentar.refeicoes')
            ->first();

        // Verifica se encontrou o cliente
        if (!$cliente) {
            return response()->json([
                'message' => 'Cadastro de cliente não encontrado.'
            ], 404);
        }

        // Verifica se o cliente possui plano
        if (!$cliente->planoAlimentar) {
            return response()->json([
                'message' => 'O cliente não possui um plano alimentar.'
            ], 404);
        }

        return response()->json([
            'plano' => $cliente->planoAlimentar
        ], 200);
    }
}
