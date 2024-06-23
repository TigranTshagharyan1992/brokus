<?php

namespace App\Providers;

//use App\View\Composers\DataComposer;
use App\View\Composers\ContentComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer(['layouts.language_switcher','layouts.footer'], function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.languages'));
            $view->with('currentRouteName', Route::currentRouteName());
        });

        view()->composer(
            ['*'],
            ContentComposer::class
        );
    }
}
