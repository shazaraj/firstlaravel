<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAge
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
        //logic middleware

        $age = Auth::user()->age;
        if ($age < 18){
            return redirect()->route('home')->with(['adult' => 'غير مصرح لك الوصول ']);
        }
//        else{
//            return redirect()->route('adult');
//        }
        return $next($request);
    }
}
