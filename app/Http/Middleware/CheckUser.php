<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class CheckUser
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
        //return $next($request);
        // Auth::user()->hasRole('AdminTractor');
        if(Auth::check()){
            if(Auth::user()->hasRole('AdminTractor')){
                return $next($request);
            } elseif (Auth::user()->hasRole('mod') || Auth::user()->hasRole('GVchunhiem')) {
                return redirect('giaovien');
            }
            else{
                return redirect('home');
            }
            // $user = Auth::user()->role;
            // dd($user);
            // foreach ($user as $value) {
            //     if($value->id == 1){
            //         return $next($request);
            //     }else{
            //         return redirect('home');
            //     }
            // }
        }else{
            return redirect('login');
        }
        
        //dd($user);
        //return $next($request);
    }
}
