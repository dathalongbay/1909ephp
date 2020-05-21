<?php

namespace App\Http\Middleware;

use Closure;

class Sblogin
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
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == 'admin' && $password == '123') {

            // đi tiếp request theo mong muốn của  người dùng
            return $next($request);
        }

        return redirect('sblogin');
    }
}
