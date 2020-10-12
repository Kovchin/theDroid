<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'name',
        'nickName',
    ];

    public function counterpartyA()
    {
        return $this->belongsTo('App\Counterparty', 'counterpartyA_id', 'id');
    }

    public function counterpartyB()
    {
        return $this->belongsTo('App\Counterparty', 'counterpartyB_id', 'id');
    }

    public function files(){
        return $this->belongsTo('App\File', 'file_id', 'id');
    }

    public function slis()
    {
        return $this->hasMany('App\Sli', 'contracts_id', 'id');
    }

    public function delete()
    {
        $this->slis()->delete();

        return parent::delete();
    }
}
