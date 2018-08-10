<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Searchs extends Model
{
    public  function scopeSearch($query, $s)
    {
//        return $query->where('name', 'like', '%', '$s', '%' )
//
    }
}
