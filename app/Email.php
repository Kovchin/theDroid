<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';

    protected $fillable = [
        'email'
    ];

    public function counterpartys(){
        return $this->hasOne('App\Counterparty');
    }
}
