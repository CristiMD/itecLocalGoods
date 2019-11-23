<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $nexta
     * @return mixed
     */
    public function handle( $request, Closure $next){
       
        $user = $request->user();

        if ( !$user->is_admin())
            return response()->json(['message' => '0']);
        return $next($request);
    }
}

//$user = $request->user();
//$user->userid;
