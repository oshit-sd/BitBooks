<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $fillable = ['f_name', 'l_name', 'email', 'password' ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
