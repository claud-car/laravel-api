<?php

namespace App\Http\Middleware;

use Closure;

use App\User;

class CheckApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->api_key;
        $user = User::where('api_token', $token)->first();

        if (!$user) {
            return responser()->json([
                'message' => 'No API_Key',
                'success' => false
            ]);
        }
        return $next($request);
    }
}
