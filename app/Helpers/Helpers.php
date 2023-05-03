<?php

use Illuminate\Support\Facades\Lang;

if (! function_exists('lang')) {
    function lang($key)
    {
        return Lang::get($key, [], $_COOKIE['lang'] ?? 'fr' );
    }
}

if (! function_exists('getLocal')) {
    function getLocal()
    {
        return $_COOKIE['lang'] ?? "fr";
    }
}

if (! function_exists('getApiUsage')) {
    function getApiUsage()
    {
          $path = storage_path('app/api_count.json');
        
          $content = file_get_contents($path);
  
          $data = json_decode($content, true);

        return $data["map_box"] ;
    }
}