<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biddings extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
       'id','profile_id','queries_id', 'responce' 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
      
    ];
}