<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function attach() //i think this func name should be pharmacy... based on Mobasher' given link
    {
        return $this->morphTo('App\Pharmacy', 'attachable');
    }
}
