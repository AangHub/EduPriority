<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['user_id', 'course_name', 'day', 'time_start', 'time_end'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
