<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class TokenController extends Controller
{
    public function token(Request $request)
    {

        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $user = User::where('email', $request->email)->first();

            if (is_null($user) ||
                !Hash::check($request->password, $user->password)
            ) {
                return response()->json('Usuário ou senha inválidos', 401);
            }   

            $token = JWT::encode(
                ['email' => $request->email],
                env('JWT_KEY')
            );

            return [
                'acces_token' => $token
            ];
        } catch (\Exception $e) {
            return response()->json('Não autorizado', 401);
        }
    }
}
