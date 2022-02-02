<?php

namespace Cerberos\CerberosTheme;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::booted(function () {
            Nova::theme(asset('/cerberos/cerberos-theme/app.css'));
        });

        $this->publishes([
            __DIR__ . '/../dist/css' => public_path('cerberos/cerberos-theme'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
