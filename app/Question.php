<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function assignment()
    {
        return $this->belongsTo('App\assignment');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function answer()
    {
        return $this->hasOne('App\Answer')->where('user_id',\Auth::user()->id);
    }

}
