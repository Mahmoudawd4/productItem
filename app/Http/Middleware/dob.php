<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class dob
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        //  function age()
        // {
        //     return Carbon::parse($this->attributes['date_of_birth'])->age;
        // }

        //$request->date_of_birth = auth()->user()->date_of_birth;
        $age = Carbon::parse(auth()->user()->date_of_birth)->diff(Carbon::now())->y;
        //return $next($request);
        // \Carbon\Carbon::parse($user->birth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');

        if($age > 30)
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('cat.list');
        }
    }
}
