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

## Usage
This package currently just exposes some actions that can be used in Nova resources to activate and deactivate users.

This functionality is tied directly to the `laravel-account-approval` package, using it as a dependency of this one.

### Setting up the actions
To use the actions, you need to add them to your Nova resource. For example, if you have a User resource, you can add the actions like so:

```php
/**
 * Get the actions available for the resource.
 *
 * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
 * @return array
 */
public function actions(NovaRequest $request)
{
    return [
        (new \Creode\LaravelNovaAccountApproval\Actions\ApproveAccount)
            ->confirmText('Are you sure you want to approve this account?')
            ->confirmButtonText('Approve')
        ->cancelButtonText("Don't Approve"),
        (new \Creode\LaravelNovaAccountApproval\Actions\DeactivateAccount)
            ->confirmText('Are you sure you want to deactivate this account?')
            ->confirmButtonText('Deactivate')
            ->cancelButtonText("Don't Deactivate"),
    ];
}
```

Actions are configured to be both inline and in bulk so they can be used to easily approve/deactivate multiple users at once from the main screen.

It may also be useful to display the status of the user in the resource index. This can be done by adding the following to the `fields` method of the resource:

```php
/**
 * Get the fields displayed by the resource.
 *
 * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
 * @return array
 */
public function fields(NovaRequest $request)
{
    return [
        // Other fields...

        Boolean::make('Activated')
            ->sortable()
            ->rules('required', 'boolean'),

        // More other fields...
    ];
}
```

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
