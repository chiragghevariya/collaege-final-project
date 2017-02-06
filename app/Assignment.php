<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
    
    public function submissions()
    {
        return $this->hasMany('App\Assignment');
    }
}
