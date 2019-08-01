<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
    ];
    public function question()
    {
        return $this->hasMany('App\Question');
    }
}
