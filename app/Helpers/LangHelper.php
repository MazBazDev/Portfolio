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