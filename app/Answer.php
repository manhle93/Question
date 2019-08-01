<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'name',
        'question_id',
        'dap_an'

    ];
    public function question() {
        return $this->belongsTo('App\Question');
    }
}
