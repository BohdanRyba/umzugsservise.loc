<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LangController extends Controller
{

    public function setLang(Request $request)
    {
        if (Cookie::has(['lang']) && Cookie::get(['lang']) && in_array(Cookie::get(['lang']), config('translatable.locales'))) {
            return redirect('/' . Cookie::get(['lang']));
        }

        return redirect(config('app.locale'));
    }
}
