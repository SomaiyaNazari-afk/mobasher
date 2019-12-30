<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'type', 'file_no', 'production', 'expiration', 'price', 'company', 'currency'];
}
