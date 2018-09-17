<?php

namespace App\Http\Middleware;
use Closure;
use Sentinel;

class AdminMiddleware
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
        if (Sentinel::check()) {
            if(Sentinel::getUser()->inRole('admin')){
                return $next($request);
            }
            else{
                return redirect('admin/login')->with('error', "You have not access !");
            }
        }else{
            //return redirect('/')->withErrors('Bạn phải đăng nhập');
            return redirect('admin/login');
        }
    }
}
