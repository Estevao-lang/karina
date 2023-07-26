<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return redirect()->intended('/dashboard'); // Redirecionar para a página de dashboard ou outra página desejada
        } else {
            // Autenticação falhou
            return redirect()->back()->withErrors(['message' => 'Credenciais inválidas.']); // Redirecionar de volta ao formulário de login com mensagem de erro
        }
    }
}
