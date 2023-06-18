<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnAdMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $ad = $request->route('ad');

        $user = $request->user();

        if($user->id === $ad->user_id){
            return $next($request);
        }
        
        return redirect('ads');
    }
}
