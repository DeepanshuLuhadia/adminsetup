<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\GlobalSetting;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data= GlobalSetting::first();
        view()->share('global_setting', $data);
    }
}
