# Laravel Nova Account Approval

[![Latest Version on Packagist](https://img.shields.io/packagist/v/creode/laravel-nova-account-approval.svg?style=flat-square)](https://packagist.org/packages/creode/laravel-nova-account-approval)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/creode-modules/laravel-nova-account-approval/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/creode-modules/laravel-nova-account-approval/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/creode-modules/laravel-nova-account-approval/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/creode-modules/laravel-nova-account-approval/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/creode/laravel-nova-account-approval.svg?style=flat-square)](https://packagist.org/packages/creode/laravel-nova-account-approval)

A simple package which integrates with the laravel-account-approval package to grant additional actions within Nova.

## Installation

You can install the package via composer:

```bash
composer require creode/laravel-nova-account-approval
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-nova-account-approval-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Creode](https://github.com/creode-dev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
