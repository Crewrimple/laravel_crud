<?php

namespace App\Http\Controllers;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        if (in_array($locale, ['en', 'uz', 'ru'])) {
            session(['locale' => $locale]);
        }
        return back();
    }
}
