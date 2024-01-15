<?php

namespace Creode\LaravelNovaAccountApproval;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Creode\LaravelNovaAccountApproval\Commands\LaravelNovaAccountApprovalCommand;

class LaravelNovaAccountApprovalServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-nova-account-approval')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-nova-account-approval_table')
            ->hasCommand(LaravelNovaAccountApprovalCommand::class);
    }
}
