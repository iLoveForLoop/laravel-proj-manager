<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    use HasFactory;
}