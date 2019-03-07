<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;

class LanguageSwitcher
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
        $ip = \Request::ip();
        $data = \Location::get($ip);
        $countryCode = $data->countryCode;
        
        if ($countryCode == 'AM') {
          App::setLocale('hy');
        } elseif ($countryCode == 'RU') {
          App::setLocale('ru');
        }

        if (Session::has('locale')  ) {
            // dd('le');
            $locale = $request->session()->get('locale');
            App::setLocale($locale);
        }
        return $next($request);
    }
}
