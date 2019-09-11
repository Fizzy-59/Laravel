<?php

// création d'un middleware perso grâce à php artisan
// middleware pour vérifier un IP

namespace App\Http\Middleware;

use Closure;

class PersoIp
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
        // mise en place d'une condition pour filtrer l'ip
        if($request->ip() == '::1')
        {
            return $next($request);
        }
        return abort(500);
    }
}
