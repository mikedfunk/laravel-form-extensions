<?php
/**
 * @package LaravelFormExtensions
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\LaravelFormExtensions;

use Illuminate\Support\ServiceProvider;

/**
 * Form additions
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class LaravelFormExtensionsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('mike_funk/laravel_form_extensions');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}
