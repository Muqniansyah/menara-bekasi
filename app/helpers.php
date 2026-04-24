<?php

if (!function_exists('img')) {
    function img($path)
    {
        return ltrim(str_replace(url('/'), '', asset($path)), '/');
    }
}
