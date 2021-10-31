<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShowBefore
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $content = $response->getContent();
        $response->setContent('Dit komt ervoor...  '.$content);

        return $response;
    }
}
