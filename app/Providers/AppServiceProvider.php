<?php

namespace App\Providers;

//use App\View\Composers\DataComposer;
use App\View\Composers\ContentComposer;
use Illuminate\Routing\UrlGenerator;
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

        UrlGenerator::macro('toLanguage', function ($language) {
            $currentRoute = app('router')->current();
            if(!$currentRoute){
                return false;
            }
            $params = $currentRoute->parameters();
            array_walk_recursive($params, function(&$v) use($language)  {
                if (in_array($v, config('app.languages'))){
                    $v = compact('language')['language'];
                }

            });

            return $this->route($currentRoute->getName(), $params);
        });


        view()->composer(['layouts.language_switcher','layouts.footer','layouts.header'], function ($view) {
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
