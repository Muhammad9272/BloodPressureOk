<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;



use Carbon\Carbon;
use Session;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App;

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
        Schema::defaultStringLength(191);
         view()->composer('*',function($settings){
            $settings->with('gs', DB::table('generalsettings')->find(1));

            $settings->with('sb1', DB::table('banners')->where('slug','side-banner1')->first());
            $settings->with('sb2', DB::table('banners')->where('slug','side-banner2')->first());

            $settings->with('pgbloods', DB::table('pg_bloods')->where('status',1)->get());

            $settings->with('classifications', DB::table('pg_classifications')->where('status',1)->get());

            $settings->with('remedies', DB::table('pg_remedies')->where('status',1)->get());

            $settings->with('treatments', DB::table('pg_treats')->where('status',1)->get());
            $settings->with('opages', DB::table('pg_others')->where('status',1)->get());

            $settings->with('articles', DB::table('articles')->where('status',1)->take(6)->get());

        });
    }
}
