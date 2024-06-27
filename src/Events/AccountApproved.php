<?php

namespace Creode\LaravelNovaAccountApproval\Events;

use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AccountApproved
{
    use SerializesModels, Dispatchable;

    /**
     * Create a new event instance.
     */
    public function __construct(public User $data)
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
