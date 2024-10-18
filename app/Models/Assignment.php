<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['task_id', 'team_member_id'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function teamMember()
    {
        return $this->belongsTo(TeamMember::class);
    }

    use HasFactory;
}