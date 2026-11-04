<?php

namespace App\Http\Controllers;

use App\Http\Middleware\SetLocale;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the Mercy Friends homepage in the chosen locale.
     */
    public function home(?string $locale = null): View
    {
        if ($locale && in_array($locale, SetLocale::SUPPORTED_LOCALES, true)) {
            App::setLocale($locale);
            session(['locale' => $locale]);
        }

        return view('home.index');
    }

    /**
     * Switch active language and redirect back or to homepage.
     */
    public function switchLocale(string $locale): RedirectResponse
    {
        if (in_array($locale, SetLocale::SUPPORTED_LOCALES, true)) {
            App::setLocale($locale);
            session(['locale' => $locale]);
        }

        $targetUrl = $locale === SetLocale::DEFAULT_LOCALE ? '/' : '/'.$locale;

        return redirect($targetUrl);
    }
}
