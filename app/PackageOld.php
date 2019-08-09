<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageOld extends Model
{
    protected $fillable = [
        'id',
        'turn_id',
        'package_id',
        'point1',
        'point2',
        'point3'

    ];
    public function turn() {
        return $this->belongsTo('App\Turn');
    }
    public function package() {
        return $this->belongsTo('App\Package');
    }
}
