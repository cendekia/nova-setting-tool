# An app setting manager tool for laravel nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cendekia/nova-setting-tool.svg?style=flat-square)](https://packagist.org/packages/cendekia/nova-setting-tool)
![CircleCI branch](https://img.shields.io/circleci/project/github/cendekia/nova-setting-tool/master.svg?style=flat-square)
[![Build Status](https://img.shields.io/travis/cendekia/nova-setting-tool/master.svg?style=flat-square)](https://travis-ci.org/cendekia/nova-setting-tool)
[![Quality Score](https://img.shields.io/scrutinizer/g/cendekia/nova-setting-tool.svg?style=flat-square)](https://scrutinizer-ci.com/g/cendekia/nova-setting-tool)
[![Total Downloads](https://img.shields.io/packagist/dt/cendekia/nova-setting-tool.svg?style=flat-square)](https://packagist.org/packages/cendekia/nova-setting-tool)

![Screenshot](https://i.imgur.com/XhheWYv.png)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require cendekia/nova-setting-tool
```

And you need to publish the migration file (this come from unisharp/laravel-settings):

```bash
php artisan vendor:publish --tag=settings
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \Cendekia\SettingTool\SettingTool,
    ];
}
```

## Usage

Click on the "Settings" menu item in your Nova app to see the tool provided by this package.


## Todo :

- [x] Edit application title
- [x] Edit version of application
- [x] Edit copyright text
- [ ] Edit default logo
- [ ] Edit theme color
- [ ] TBA


## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email me@cendekiapp.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
