<?php

namespace App\Http\Middleware;
use Closure;
use Sentinel;

class UserMiddleware
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
        if (Sentinel::check())
        {
            if (Sentinel::getUser()->inRole('user'))
            { 
                return $next($request);
            }
            else
            {
                //return redirect()->route('login')->with('err', 'Bạn không có quyền truy cập');
                //return redirect('/')->with('error', 'You have not permission access');4
                return redirect('/');
            }   
        }else{
            return redirect('/');
        }
    }
}
