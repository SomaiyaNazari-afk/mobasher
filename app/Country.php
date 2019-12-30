<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = [ 'country_name'];


    public function provinces()
    {
        return $this->hasMany(Province::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'countries.id');
    }

    public function pharmacies()
    {
        return $this->hasMany(Pharmacy::class);
    }
}
