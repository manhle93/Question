<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $fillable = [
        'id',
        'total_point1',
        'total_point2',
        'total_point3'

    ];
    public function packageOld()
    {
        return $this->hasMany('App\PackageOld');
    }
}
