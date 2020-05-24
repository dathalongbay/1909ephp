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


        $ss_sblogin = session('sblogin');
      /* echo __METHOD__;
        dump($ss_sblogin);
        die;*/


        if (isset($ss_sblogin) && ($ss_sblogin)) {

            // đi tiếp request theo mong muốn của  người dùng
            return $next($request);
        }

        return redirect('/backend/sbadmin2/login')->with('status', 'Vui lòng đăng nhập để tiếp tục!');
    }
}
