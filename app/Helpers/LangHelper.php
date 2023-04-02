<?php

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

if (! function_exists('lang')) {
    function lang($key)
    {
        return Lang::get($key, [], $_COOKIE['lang']);
    }
}

if (! function_exists('getLocal')) {
    function getLocal()
    {
        return $_COOKIE['lang'];
    }
}