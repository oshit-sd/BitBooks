<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['u_id','u_name','status','img'];
    protected $dates=['created_at'];
}
