<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task_name', 'description', 'due_date', 'project_id'];

    public function assignments()
    {

    return $this->hasMany(Assignment::class);

    }


    use HasFactory;
}