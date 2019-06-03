<?php

namespace App\Providers;

use App\Interfaces\CertificatesInterface;
use App\Interfaces\Complexity_interface;
use App\Interfaces\Course_calc_Interface;
use App\Interfaces\Level_progression_calc_Interface;
use App\Interfaces\Masteries_calculator_repo_Interface;
use App\Interfaces\RecommendationInterface;
use App\Interfaces\Statistics_builder_Interface;
use App\Interfaces\Time_formater_interface;
use App\Interfaces\UserInterface;
use App\Repositories\CertificateRepo;
use App\Repositories\ComplexityRepo;
use App\Repositories\Masteries_calculator_repo;
use App\Repositories\RecommendationRepo;
use App\Repositories\UserRepo;
use App\Services\Course_calc;
use App\Services\Level_progression_calc;
use App\Services\Statistics_builder;
use App\Services\time_formater;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserInterface::class, UserRepo::class);
        $this->app->singleton(Level_progression_calc_Interface::class, Level_progression_calc::class);
        $this->app->singleton(Statistics_builder_Interface::class, Statistics_builder::class);
        $this->app->singleton(Course_calc_Interface::class, Course_calc::class);
        $this->app->singleton(Time_formater_interface::class, time_formater::class);
        $this->app->singleton(RecommendationInterface::class, RecommendationRepo::class);
        $this->app->singleton(CertificatesInterface::class, CertificateRepo::class);
        $this->app->singleton(Masteries_calculator_repo_Interface::class, Masteries_calculator_repo::class);
        $this->app->singleton(Complexity_interface::class, ComplexityRepo::class);
    }
}
