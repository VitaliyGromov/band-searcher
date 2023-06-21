<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if($user->active){
            return $next($request);
        }

        return abort(401, 'Ваш аккаунт деактивирован');
    }
}
