<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companyModel extends Model
{
    protected $fillable = [
        'company_name', 'owner_name', 'email','phone', 'company_type', 'address',
    ];
}
