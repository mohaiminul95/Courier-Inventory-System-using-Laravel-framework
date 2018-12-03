<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = [
        'company_name', 'owner_name', 'email','phone', 'company_type', 'address',
    ];

    public function order()
    {
        return $this->belongsTo('App\order');
    }

}
