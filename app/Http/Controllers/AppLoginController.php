<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AppLoginController extends Controller
{    
    //cliente ja autenticado no app acesse uma pagina web(inAppWebView) para alterar senha
    public function entrar(Request $request) //recebe o token
    {
        $token = PersonalAccessToken::findToken($request->bearerToken()); //procura o token e salva

        if (!$token || $token->tokenable->tipo_usuario !== 'Cliente') { //verifica se o token existe e é de um user cliente
            abort(401);
        }
        // autentica o cliente no sistema web utilizando o usuario associado ao token
        Auth::guard('web')->login($token->tokenable);
        $request->session()->regenerate();

        return redirect()->route('app.senha'); //redireciono para tela de alterar senha
    }
}
