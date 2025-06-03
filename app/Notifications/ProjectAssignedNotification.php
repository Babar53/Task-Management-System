<?php

namespace App\Notifications;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ProjectAssignedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $project;
    protected $assignedBy;
    protected $notes;

    public function __construct($project, $assignedBy, $notes = null)
    {
        $this->project = $project;
        $this->assignedBy = $assignedBy;
        $this->notes = $notes;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        $url = url('/projects/' . $this->project->id);

        return (new MailMessage)
            ->subject('New Project Assignment: ' . $this->project->name)
            ->greeting('Hello ' . $notifiable->name . '!')
            ->line('You have been assigned to a new project.')
            ->line('Project: ' . $this->project->name)
            ->line('Assigned by: ' . $this->assignedBy->name)
            ->line('Notes: ' . ($this->notes ?: 'No additional notes provided.'))
            ->action('View Project', $url)
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'project_id' => $this->project->id,
            'project_name' => $this->project->name,
            'assigned_by_id' => $this->assignedBy->id,
            'assigned_by_name' => $this->assignedBy->name,
            'message' => 'You have been assigned to the project: ' . $this->project->name,
            'notes' => $this->notes,
            'timestamp' => now(),
        ];
    }
}
