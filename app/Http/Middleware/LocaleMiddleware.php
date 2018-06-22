<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $segment = $request->segment(1);
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        if ($segment && in_array($segment, config('translatable.locales'))) {
            if ($request->route() !== null) {
                $request->route()->forgetParameter('lang');
            }
            setcookie('lang', $segment, null, '/');
            app()->setLocale($segment);

            return $next($request);
        } elseif (Cookie::has('lang') && in_array(Cookie::get('lang'), config('translatable.locales'))) {
            return redirect('/' . Cookie::get('lang'));
        } elseif ($lang && in_array($lang, config('translatable.locales'))) {
            return redirect('/' . $lang);
        }

        return redirect('/de');

//        if (Session::has('lang')) {
//
//            dd($request->route()->getPrefix('locale'));
//
//            App::setLocale(Session::get('lang'));
//            return $next($request);
//        }
//        Session::put('lang', config('app.locale'));
//        App::setLocale(config('app.locale'));
//        return $next($request);
    }
}
