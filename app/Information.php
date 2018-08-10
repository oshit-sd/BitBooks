<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = ['u_id','u_name','user_image', 'user_coverphoto','email', 'language',
        'dob_day' , 'dob_month' , 'dob_year' , 'gender' , 'my_city' ,
        'my_country' , 'about_me', 'school' , 'from_school' , 'to_school',
        'description_school' , 'university' , 'from_uni' , 'to_uni' , 'description_uni',
        'company' , 'designation' , 'from_work' , 'to_work', 'city_work', 'description_work', 'interest' ];
}
