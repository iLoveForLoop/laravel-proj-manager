<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function team_members(){
        return $this->hasMany(TeamMember::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    use HasFactory;
}