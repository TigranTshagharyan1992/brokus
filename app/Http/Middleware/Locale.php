<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Arr;
class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $languages = ['hy' =>1, 'ru'=>2, 'en'=>3];
        $lang='hy';
//        dd($request);
        if ($request->method() === 'GET') {
            if($request->segment(1)){
                $lang = $request->segment(1);
            }
            if(strlen($lang) === 2 && in_array($lang, config('app.languages'))){
                app()->setLocale($lang);
            }else{
                $segments = $request->segments();
                $fallback = session('locale') ?: config('app.fallback_locale');
                $segments = Arr::prepend($segments, $fallback);

                return redirect()->to(implode('/', $segments));
            }
        }
        session(['LANG' =>  $languages[$lang]]);

        return $next($request);
    }
}
