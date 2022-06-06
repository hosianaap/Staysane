<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PatientMiddleware
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
        // If authenticated or logged in
        if (Auth::check()) {
            // If the role is patient
            if (Auth::user()->role == 'Patient') {
                return $next($request);
            }

            // If the role is psikolog
            else {
                return redirect('/psikolog/patient');
            }
        }

        // If not log in
        else {
            return redirect('/');
        }
    }
}
