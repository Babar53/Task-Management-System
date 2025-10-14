<?php

namespace App\Events;

use App\Models\Project;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProjectAssigned
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $project;
    public $user;
    public $assignedBy;
    public $notes;

    public function __construct(Project $project, User $user, User $assignedBy, $notes = null)
    {
        $this->project = $project;
        $this->user = $user;
        $this->assignedBy = $assignedBy;
        $this->notes = $notes;
    }
}
