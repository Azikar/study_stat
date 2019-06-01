<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Interfaces\UserInterface;
use App\Interfaces\Level_progression_calc_Interface;
use App\Interfaces\Statistics_builder_Interface;
use App\Interfaces\Course_calc_Interface;
use App\Interfaces\Time_formater_interface;


use App\Repositories\UserRepo;
use App\Services\Level_progression_calc;
use App\Services\Statistics_builder;
use App\Services\Course_calc;
use App\Services\time_formater;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(400);
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserInterface::class,UserRepo::class);
        $this->app->singleton(Level_progression_calc_Interface::class,Level_progression_calc::class);
        $this->app->singleton(Statistics_builder_Interface::class,Statistics_builder::class);
        $this->app->singleton(Course_calc_Interface::class,Course_calc::class);
         $this->app->singleton(Time_formater_interface::class,time_formater::class);

       
    }
}
