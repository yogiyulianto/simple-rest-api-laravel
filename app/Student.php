<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
}
