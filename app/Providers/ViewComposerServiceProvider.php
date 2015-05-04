<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ViewComposerServiceProvider
 *
 * @package App\Providers
 */
class ViewComposerServiceProvider extends ServiceProvider
{

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

    /**
     * Compose the navigation bar.
     */
    private function composeNavigation()
    {
        view()->composer('partial.nav',
            'App\Http\Composers\NavigationComposer');
    }

}
