<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlgoritmAnswer extends Model
{
    protected $table = 'algoritm_answers';

    protected $fillable = [
        'answer',
        'link_question_id'
    ];
}
