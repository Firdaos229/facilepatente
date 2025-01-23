<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckIfIsADMIN
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next):Response
    {
        $user = Auth::user();

        if (!$user || !$user->is_admin) {
            // Rediriger vers l'accueil si l'utilisateur n'est pas un admin
            return redirect('/');
        }

        return $next($request);
    }
}
