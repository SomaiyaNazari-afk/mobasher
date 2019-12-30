<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [ 'province_name'];


    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'provinces.id');
    }

    public function pharmacies()
    {
        return $this->hasMany(Pharmacy::class);
    }
}
