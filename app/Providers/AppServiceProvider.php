<?php

namespace App\Providers;

use App\Model\KriminalitasModel;
use App\Model\LakalintasModel;
use Illuminate\Support\ServiceProvider;

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

        view()->composer('layout.Home', function ($view) {
            $data = array(
                'all_laka' => LakalintasModel::take(5)->get(),
                'all_kriminal' => KriminalitasModel::take(5)->get(),
            );
            $view->with('special', $data);
        });
    }
}
