<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'name',
        'package_id',
        'image_url'

    ];
    public function package() {
        return $this->belongsTo('App\Package');
    }
    public function answer()
    {
        return $this->hasMany('App\Answer');
    }
}
