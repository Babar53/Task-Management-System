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
            ->subject('You Have Been Assigned a New Project: ' . $this->project->name)
            ->greeting('Dear ' . $notifiable->name . ',')
            ->line('You have been assigned as the manager for a new project.')
            ->line('**Project Name:** ' . $this->project->name)
            ->line('**Assigned By:** ' . $this->assignedBy->name)
            ->when($this->notes, function ($mail) {
                return $mail->line('**Notes from assigner:** ' . $this->notes);
            }, function ($mail) {
                return $mail->line('No additional notes were provided.');
            })
            ->action('View Project Details', $url)
            ->line('Please review the project details at your earliest convenience.')
            ->line('Thank you for your leadership and contribution.');
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
