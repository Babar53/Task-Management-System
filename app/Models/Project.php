<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'description',
        'priority',
        'start_date',
        'end_date',
        'status',
        'created_by'
    ];

    public function assignedUsers()
    {
        return $this->belongsToMany(User::class, 'assigned_projects', 'project_id', 'user_id')
            ->withPivot(['assigned_by', 'notes', 'assigned_at'])
            ->withTimestamps();
    }
}
