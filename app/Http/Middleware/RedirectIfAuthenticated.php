<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        

        if(Auth::guard($guard)->check()){
            $user = Auth::user()->roles()->get()->pluck('id');
            
        $user_role = $user[0];
        switch($user_role){
            case '2':
                return redirect('/home');
            break;
        
            case '3':
                return redirect('/home');
            break;

            default:
                return redirect('home');
             break;

        }
        }
        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        return $next($request);
    }
}
