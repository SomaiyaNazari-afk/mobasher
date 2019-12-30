<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'attachments';
    protected $fillable = ['mime', 'size', 'name', 'original_name'];
}
