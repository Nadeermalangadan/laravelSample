<?php namespace App\Http\Middleware;

use Closure;
use App\User;
class simpleAuthMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
//            return "gffgjj";
		return Auth::onceBasic('username') ?: $next($request);
            return $next($request);
	}

}
