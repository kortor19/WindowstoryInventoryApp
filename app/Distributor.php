<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
        'phoneNumber',
        'email',
        'address',
        'companyName',
        'country',

    ];
}
