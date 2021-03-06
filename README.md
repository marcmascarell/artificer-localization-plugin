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

Publish assets and config

```sh
php artisan artificer-localization-plugin:publish
```

Modify config to fill your needs.

Support
----

If you want to give your opinion, you can send me an [email](mailto:marcmascarell@gmail.com), comment the project directly (if you want to contribute with information or resources) or fork the project and make a pull request.

Also I will be grateful if you want to make a donation, this project hasn't got a death date and it wants to be improved constantly:

[![Website Button](http://www.rahmenversand.com/images/paypal_logo_klein.gif "Donate!")](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=marcmascarell%40gmail%2ecom&lc=US&item_name=Artificer%20Development&no_note=0&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest&amount=5 "Contribute to the project")


License
----

MIT