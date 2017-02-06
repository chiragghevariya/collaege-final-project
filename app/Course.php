<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function scopeFaculty()
    {
        return Course::where('user_id',\Auth::user()->id);
    }

    public function lectures()
    {
        return $this->hasMany('App\Lecture');
    }

    public function assignments()
    {
        return $this->hasMany('App\Assignment');
    }

    public function enroll()
    {
        return $this->belongsToMany('App\User');
    }
}
