<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    public function handle(Request $request, Closure $next): mixed
    {
        if ($request->session()->exists('locale')) {
            App::setLocale($request->session()->get('locale'));
        }

        return $next($request);
    }
}
