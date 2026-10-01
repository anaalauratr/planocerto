<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AppLoginController extends Controller
{
    public function entrar(Request $request)
    {
        $token = PersonalAccessToken::findToken($request->bearerToken());

        if (!$token || $token->tokenable->tipo_usuario !== 'Cliente') {
            abort(401);
        }

        Auth::guard('web')->login($token->tokenable);
        $request->session()->regenerate();

        return redirect()->route('app.senha');
    }
}