<?php

namespace App\Functions;

class LinkFunction
{
    public static function is_active($route)
    {
        return request()->routeIs($route) ? 'bg-yellow-600' : '';
    }
}
