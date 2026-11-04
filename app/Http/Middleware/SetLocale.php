<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported application locales.
     *
     * @var array<int, string>
     */
    public const SUPPORTED_LOCALES = ['en', 'fr', 'de'];

    /**
     * Default application locale.
     */
    public const DEFAULT_LOCALE = 'en';

    /**
     * Handle an incoming request and set the active application locale.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeLocale = $request->route('locale');

        if ($routeLocale && in_array($routeLocale, self::SUPPORTED_LOCALES, true)) {
            $locale = $routeLocale;
        } else {
            $locale = session('locale', config('app.locale', self::DEFAULT_LOCALE));
        }

        if (! in_array($locale, self::SUPPORTED_LOCALES, true)) {
            $locale = self::DEFAULT_LOCALE;
        }

        App::setLocale($locale);
        session(['locale' => $locale]);

        return $next($request);
    }
}
