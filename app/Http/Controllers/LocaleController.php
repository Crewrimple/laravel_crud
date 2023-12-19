<?php

namespace App\Http\Controllers;


class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        if (in_array($locale, ['uz', 'en', 'ru'])) {
            session(['locale' => $locale]);
        }
        return back();
    }
    
}