<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AlgoritmQuestion extends Model
{
    protected $table = 'algoritm_questions';

    protected $fillable = [
        'question',
        'algoritm_id'
    ];

    public function answers()
    {
        return $this->hasMany('App\AlgoritmAnswer', 'algoritm_question_id');
    }

    public function algoritm()
    {
        return $this->belongsTo('App\Algoritm', 'algoritm_id');
    }
}
