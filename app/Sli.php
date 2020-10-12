<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sli extends Model
{
    protected $fillable=[
      'name',
        'number',
        'duration'
    ];

    public function contracts(){
        return $this->belongsTo('App\Contract', 'contracts_id','id');
    }
}
