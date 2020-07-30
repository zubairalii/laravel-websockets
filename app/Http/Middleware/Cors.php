<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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


//	header('Access-Control-Allow-Origin:  *');
//https://websocket.breakoutedu.com
	header('Access-Control-Allow-Origin:  https://websocket.breakoutedu.com');

//	header('Access-Control-Allow-Origin:  http://localhost:8000');
//	header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
	 header('Access-Control-Allow-Headers:  Content-Type, Authorization, Origin, X-Requested-With, x-csrf-token');
	header('Access-Control-Allow-Methods:  GET, POST, PUT');

/*	header('Access-Control-Allow-Origin:  *');
	//header('Access-Control-Allow-Origin:  http://localhost:8000');
	header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
	header('Access-Control-Allow-Methods:  POST, PUT');*/

        return $next($request);
    }
}
