<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function change($lang)
    {
        if ($lang !== null) {
            App::setLocale($lang);
            Session::put('lang', $lang);
            return redirect()->route('home');
        }
        App::setLocale(config('translatable.fallback_locale'));
        Session::put('lang',config('translatable.fallback_locale'));
        return redirect()->route('home');
    }
}
