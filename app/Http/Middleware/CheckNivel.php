<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckNivel
{
    public function handle(Request $request, Closure $next, $nivel)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $userNivel = Auth::user()->nivel_id; // Verifica pelo ID (1: admin, 2: user)

        if ($nivel === 'admin' && $userNivel !== 1) {
            return redirect()->route('admin.login')->with('error', 'Acesso negado: Apenas administradores.');
        }

        if ($nivel === 'user' && $userNivel !== 2) {
            return redirect()->route('admin.login')->with('error', 'Acesso negado: Apenas usuários.');
        }

        return $next($request);
    }
}