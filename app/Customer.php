<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
        'phoneNumber',
        'email',
        'address',
        'state',
        'country',

    ];
}
