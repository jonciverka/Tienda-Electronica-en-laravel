<?php

namespace inge\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;


class Empleado
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
        if (\Auth::user()->tipo != 2) {
            Session::flash('message-error', 'Sin privilegios');
            return redirect()->to('/');
        }
        return $next($request);
    }
}
