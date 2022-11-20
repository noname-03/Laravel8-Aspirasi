<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Aspiration;


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
        date_default_timezone_set('Asia/Jakarta');
        View::share('kategori', Category::all());
        View::share('aspirasi', Aspiration::latest('created_at')->limit(4)->get());
        View::share('about', About::all());
        Paginator::useBootstrap();
    }
}
