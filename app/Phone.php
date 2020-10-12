<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';

    protected $fillable = [
        'phone'
    ];

    public function counterpartys(){
        return $this->hasOne('App\Counterparty');
    }
}
