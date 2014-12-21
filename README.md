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
```

Add this dependency: [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization)

Publish assets and config

```sh
php artisan artificer-localization-plugin:publish
```

Modify config to fill your needs.