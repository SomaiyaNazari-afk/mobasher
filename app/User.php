<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = [ 'email', 'password', 'first_name', 'last_name', 'gender', 'phone', 'dob', 'address', 'user_type', 'country_id', 'province_id', ];
    protected $appends = ['full_name'];


    public function pharmacy()
    {
        return $this->hasOne(Pharmacy::class);
    }

    public function pharmacyView()
    {
        return $this->belongsTo('App\Pharmacy', 'users.id');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function province(){
        return $this->belongsTo('App\Province');
    }

    public function attachments()
    {
        return $this->morphMany('App\Attachment', 'attachable');
    }

    public function tags()
    {
        return $this->morphToOne('App\Pharmacy', 'taggable');
    }

    public function getFullNameAttribute() {
        return $this->first_name. ' '. $this->last_name;
    }

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
