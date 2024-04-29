<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsBasharUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $name = $request->route('name');
       if($name != "bashar"){
           return response()->json(["error" => [$name . " is not allowd to access this endpoint"]], 401);
           // return يعني اي شيء بعده لن يتم تنفيذه

       }
        return $next($request);
    }
}
