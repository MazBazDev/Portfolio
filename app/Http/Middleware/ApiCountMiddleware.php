<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Storage;

class ApiCountMiddleware
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

        dd($request->header());

        if ($request->header('Cache-Control') !== 'keep-alive') {
            $path = storage_path('app/api_count.json');
        
            $content = file_get_contents($path);
    
            $data = json_decode($content, true);
    
            $data['map_box']++;
    
            $content = json_encode($data);
    
            file_put_contents($path, $content);
        } 
       
        return $next($request);
   }
}
