<?php

namespace Mascame\ArtificerLocalizationPlugin;

use Illuminate\Support\ServiceProvider;
use Mascame\Artificer\Plugin\PluginManager;
use App;

class ArtificerLocalizationPluginServiceProvider extends ServiceProvider
{
    protected $package = 'mascame/artificer-localization-plugin';

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
        $this->package($this->package);

        $this->addPublishCommand();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $package = $this->package;

        App::bind($this->package, function () use ($package) {
            return new LocalizationPlugin($package);
        });

        new PluginManager($this->package);
    }

    private function addPublishCommand()
    {
        $command_key = $this->package.'-command-publish';

        App::bind($command_key, function () {
            return new PublishCommand();
        });

        $this->commands($command_key);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
