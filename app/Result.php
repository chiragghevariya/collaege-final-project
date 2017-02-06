<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Result extends Model
{
    protected $fillable =['file'];

    //
    public static function scopeauth($query)
    {
        return $query->where('user_id',\Auth::user()->id);
    }
}
