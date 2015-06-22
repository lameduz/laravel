<?php namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    public function composeNavigation()
    {
        view()->composer('app', function ($view) {

            if ($user = Auth::user())
            {
                if($count = $user->blogs()->count())
                {
                    dd($count);
                }
            }
        });
    }
}