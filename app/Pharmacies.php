<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacies extends Model
{
    protected $table = 'pharmacy';
    protected $fillable = ['name', 'owner_id', 'country_id', 'province_id', 'address'];

}
