<?php

namespace inge\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Session;
use Closure;

class Cliente
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
        if (\Auth::user()->tipo != 3) {
            Session::flash('message-error', 'Sin privilegios');
            return redirect()->to('/');
        }
        return $next($request);
    }
}
