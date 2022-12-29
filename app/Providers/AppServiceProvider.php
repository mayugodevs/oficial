<?php

namespace App\Providers;
use App\Models\Asignado;
use App\Policies\InscripcionPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    protected $policies = [
        Inscripcion::class => InscripcionPolicy::class
      ];
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        \Carbon\Carbon::setLocale(config('app.locale'));

       
    }
}
