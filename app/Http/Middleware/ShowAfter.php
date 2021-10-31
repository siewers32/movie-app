<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShowAfter
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
        $response->setContent($content.'     ....Dit komt erna');

        return $response;
    }
}
