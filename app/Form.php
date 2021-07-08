<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    
    protected $fillable = ['name', 'email', 'phone', 'address', 'gender'];
    protected $hidden = [];
}