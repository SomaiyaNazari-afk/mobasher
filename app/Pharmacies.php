<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacies extends Model
{
    protected $table = 'pharmacies';
    protected $fillable = ['name', 'owner_id', 'country_id', 'province_id', 'address', 'city'];
}
