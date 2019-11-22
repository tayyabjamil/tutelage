<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
       'id', 'profile_id','name', 'duration', 'details' ,'modules'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
      
    ];
}