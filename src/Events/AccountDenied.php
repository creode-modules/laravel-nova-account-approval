<?php

namespace Creode\LaravelNovaAccountApproval\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AccountDenied
{
    use SerializesModels, Dispatchable;

    /**
     * Create a new event instance.
     */
    public function __construct(public array $data)
    {
    }

    /**
     * Get the channels the event should be broadcast on.
     */
    public function broadcastOn(): array
    {
        return [];
    }
}
