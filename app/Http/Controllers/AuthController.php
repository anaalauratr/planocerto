<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $dados = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $dados['email'])->first();

        if (!$user || !Hash::check($dados['password'], $user->password)) {
            return response()->json([
                'message' => 'E-mail ou senha inválidos.'
            ], 401);
        }

        // Verifica se é um usuário Cliente
        if ($user->tipo_usuario !== 'Cliente') {
            return response()->json([
                'message' => 'Você precisa ser um cliente cadastrado para acessar o aplicativo.'
            ], 403);
        }

        $token = $user->createToken('app-flutter')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user
        ]);
    }

    public function register(Request $request)
    {
        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $dados['name'],
            'email' => $dados['email'],
            'password' => Hash::make($dados['password']),
        ]);

        $token = $user->createToken('teste-api')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();    // invalida o token

        return response()->json([
            'message' => 'Logout realizado com sucesso.'
        ], 200);
    }

    public function me(Request $request)
    {
        return response()->json($request->user());
    }

    public function usuarios()
    {
        $usuarios = User::all();
        return response()->json($usuarios);
    }
}
