<?php

namespace App\Http\Middleware;

use Closure;

class PasswordFilter
{

    public function handle($request, Closure $next){
        if($request->header('X-Password') === 'Fortuna Major'){
            return $next($request);
        } 
        return response()->json(['message' => 'Incorect password'], 401);
    }
}