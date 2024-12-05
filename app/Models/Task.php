<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['user_id', 'task_name', 'deadline', 'priority', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
