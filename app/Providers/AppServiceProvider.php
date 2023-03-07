<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public $PagesP;

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
        //
        Schema::defaultStringLength(191);

        $pages= Page::whereNotNull('popup_id')->get();
        $this->pagesP = $pages;
        view()->composer('dashboard.layouts.master', function($view) {
            $view->with(['pagesP' => $this->pagesP]);
        });

        view()->composer('*', function($view){
            $view_name = str_replace('dashboard.', '', $view->getName());
            view()->share('view_name', $view_name);
        });

    }
}
