<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{


    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  \Closure(Request): (Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guest()){
            abort(404, 'Unauthorized action.');
        }else{
            if ($request->user()->is_admin==1) {
                return $next($request);
            }else{
                abort(404, 'Unauthorized action.');
            }
        }
    }
}
