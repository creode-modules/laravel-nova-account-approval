<?php

namespace Creode\LaravelNovaAccountApproval\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Creode\LaravelNovaAccountApproval\LaravelNovaAccountApproval
 */
class LaravelNovaAccountApproval extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Creode\LaravelNovaAccountApproval\LaravelNovaAccountApproval::class;
    }
}
