<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;

class Role {

  public function handle($request, Closure $next, String $role) {
    if (!Auth::check()) // This isnt necessary, it should be part of your 'auth' middleware
      return redirect('/home');

    $user_role_id = Auth::user()->roles()->get()->pluck('id');
    $user_role = $user_role_id[0];

    if($user_role == $role)
      return $next($request);

    return redirect('/home');
  }
}