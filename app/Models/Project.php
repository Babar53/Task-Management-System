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
}
