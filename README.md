# showcase-clients

[![Latest Version on Packagist](https://img.shields.io/packagist/v/binomedev/showcase-clients.svg?style=flat-square)](https://packagist.org/packages/binomedev/showcase-clients)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/binomedev/showcase-clients/run-tests?label=tests)](https://github.com/binomedev/showcase-clients/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/binomedev/showcase-clients/Check%20&%20fix%20styling?label=code%20style)](https://github.com/binomedev/showcase-clients/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/binomedev/showcase-clients.svg?style=flat-square)](https://packagist.org/packages/binomedev/showcase-clients)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require binomedev/showcase-clients
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Binomedev\ClientsManager\ClientsManagerServiceProvider" --tag="showcase-clients-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Binomedev\ClientsManager\ClientsManagerServiceProvider" --tag="showcase-clients-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$showcase-clients = new Binomedev\ClientsManager();
echo $showcase-clients->echoPhrase('Hello, Binomedev!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Codrin Axinte](https://github.com/codrin-axinte)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
