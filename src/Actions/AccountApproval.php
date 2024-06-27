<?php

namespace Creode\LaravelNovaAccountApproval\Actions;

use Creode\LaravelNovaAccountApproval\Events\AccountApproved;
use Creode\LaravelNovaAccountApproval\Events\AccountDenied;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

abstract class AccountApproval extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Indicates if this action is available on the resource's table row.
     *
     * @var bool
     */
    public $showInline = true;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {
            $model->activated = $this->activationStatus;
            $model->save();
            event(new AccountApproved($model));
            event(new AccountDenied($model));
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [];
    }
}
