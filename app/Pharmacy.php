<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{

    protected $table = 'pharmacies';
    protected $fillable = ['name', 'owner_id', 'country_id', 'province_id', 'address', 'city'];


    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }


    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function attachments()
    {
        return $this->morphedByMany('App\Attachment', 'attachable');
    }

}
