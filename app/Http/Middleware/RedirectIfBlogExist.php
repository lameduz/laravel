<?php namespace App\Http\Middleware;

use App\Blog;
use Closure;

class RedirectIfBlogExist {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

        if(Blog::whereSubdomain($request->route('blogname'))->first())
        {
            return $next($request);
        }

	}

}
