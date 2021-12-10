<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use App\Models\User;
use Illuminate\Http\Request;

class UserAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            if (!$request->hasHeader('Authorization')) {
                throw new \Exception();
            }
    
            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
    
            $authentication = JWT::decode($token, env('JWT_KEY'), ['HS256']);
    
            $user = User::where('email', $authentication->email)->first();
    
            if (is_null($user)) {
                throw new \Exception();
            }
    
            return $next($request);
        } catch (\Exception $e) {
            return response()->json('Não autorizado', 401);
        }
    }
}
