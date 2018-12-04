<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'order_id', 'agent_id', 'order_date','parcel_desc', 'weight', 'booking_amount', 'is_processed','processing_amount', 'net_profit', 'processing_date', 'payment_type',
    ];

    public function company()
    {
        return $this->hasMany('App\company');
    }

}
