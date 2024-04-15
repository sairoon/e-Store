<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer('*', function ($view) {
        $view->with('categories', Category::where('status', 1)->get());
        });
    }
}
