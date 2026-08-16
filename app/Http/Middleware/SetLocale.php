<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);
        App::setLocale(in_array($locale, ['en', 'it']) ? $locale : 'en');
        return $next($request);
    }
}
