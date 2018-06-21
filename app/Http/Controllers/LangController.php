<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{

    public function setLang(Request $request)
    {
        if (Session::has('lang')) {
            App::setLocale(Session::get('lang'));
        } else {
            App::setLocale(config('app.locale'));
        }
        return redirect()->route('home',['locale'=>App::getLocale()]);
    }

    public function changeLocale($locale)
    {
        Session::put('lang', $locale);
        return redirect()->action('LangController@setLang');
    }

}
