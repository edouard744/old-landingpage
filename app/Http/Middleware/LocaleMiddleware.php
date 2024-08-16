<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->segment(1) && $request->segment(2)) {
            $locale = $request->segment(1);
            Cookie::queue('lang', Crypt::encrypt($locale, false), 60 * 24 * 365); // 1 an
        } elseif ($request->cookie('lang')) {
            // Déchiffrer et définir la langue
            $locale = Crypt::decrypt(Cookie::get('lang'), false);
        } else {
            $locale = config('app.fallback_locale');
        }

        if (in_array($locale, config('app.available_locales'))) {
            App::setLocale($locale);
        } else {
            // Si la langue n'est pas valide, on peut rediriger vers la langue par défaut
            Cookie::queue('lang', Crypt::encrypt(config('app.fallback_locale'), false), 60 * 24 * 365); // 1 an

            return redirect(config('app.fallback_locale').'/'.$request->path());
        }

        return $next($request);
    }
}
