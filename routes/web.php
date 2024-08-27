<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

$locale = App::currentLocale();

// Redirige la route racine vers la langue par défaut

Route::get('/', function () {
    $locale = App::currentLocale();

    return redirect()->route('home', $locale);
});
Route::get('/home', function () {
    $locale = App::currentLocale();

    return redirect()->route('home', $locale);
});
Route::get('/services', function () {
    $locale = App::currentLocale();

    return redirect()->route('services', $locale);
});
Route::get('privacy-policy', function () {
    $locale = App::currentLocale();

    return redirect()->route('privacy-policy', $locale);
});

Route::get('/projects', function () {
    $locale = App::currentLocale();

    return redirect()->route('projects', $locale);
});
Route::get('/contact', function () {
    $locale = App::currentLocale();

    return redirect()->route('contact', $locale);
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('/home', function ($locale) {
        if (in_array($locale, config('app.available_locales'))) {
            App::setLocale($locale);
        }

        return view('home');
    })->name('home');

    Route::get('/projects', function ($locale) {
        if (in_array($locale, config('app.available_locales'))) {
            App::setLocale($locale);
        }

        return view('projects');
    })->name('projects');

    Route::get('/services', function ($locale) {
        if (in_array($locale, config('app.available_locales'))) {
            App::setLocale($locale);
        }

        return view('services');
    })->name('services');

    Route::get('/contact', function ($locale) {
        if (in_array($locale, config('app.available_locales'))) {
            App::setLocale($locale);
        }

        return view('contact');
    })->name('contact');

    Route::get('/privacy-policy', function () {
        return view('confidentiality');
    })->name('privacy-policy');
});
Route::post('/mail', [MailController::class, 'store']);
