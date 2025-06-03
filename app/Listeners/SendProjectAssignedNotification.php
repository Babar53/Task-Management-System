<?php

namespace App\Listeners;

use App\Events\ProjectAssigned;
use App\Notifications\ProjectAssignedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendProjectAssignedNotification implements ShouldQueue
{

    use InteractsWithQueue;
    public function handle(ProjectAssigned $event)
    {
        $event->user->notify(
            new ProjectAssignedNotification(
                $event->project,
                $event->assignedBy,
                $event->notes
            )
        );
    }
}
