<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Phone;
use App\Email;

class Counterparty extends Model
{
    protected $table = 'counterparties';

    protected $fillable = [
        'name',
//        'email_id',
//        'phone_id',
//        'description'
    ];

    public function phones()
    {
        return $this->belongsTo('App\Phone', 'phone_id', 'id');
    }

    public function emails()
    {
        return $this->belongsTo('App\Email', 'email_id', 'id');
    }

    public function delete()
    {

        $this->phones()->delete();
        $this->emails()->delete();

        return parent::delete();

    }
}
