<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributory extends Model
{
    protected $primaryKey = 'distributor_id';
    public $incrementing = true;
    protected $keyType = 'string';
}
