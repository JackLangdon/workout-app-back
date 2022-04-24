<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function workouts()
    {
        return $this->belongsToMany(Workout::class, 'workout_exercise', 'workout_id', 'exercise_id');
    }
}
