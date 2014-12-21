Artificer Plugin: Localization
=============================

Provides localization to Artificer.

Installation
--------------
Require this package in your composer.json and run composer update:

    "mascame/artificer-localization-plugin": "dev-master"

Add the Service Provider to `app/config` at the bottom of Providers:

```php
'Mascame\ArtificerLocalizationPlugin\ArtificerLocalizationPluginServiceProvider',

// Dependency
'Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider'
```
Publish assets and config

```sh
php artisan artificer-localization-plugin:publish
```

Modify config to fill your needs