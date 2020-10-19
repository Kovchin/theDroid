<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Algoritm extends Model
{
    protected $table ='algoritms';

    protected $fillable = [
        'shortName',
        'name',
        'description'
    ];

    public function questions(){
        return $this->hasMany('App\AlgoritmQuestion', 'algoritm_id');
    }
}
