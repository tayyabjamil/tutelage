<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','first_name', 'last_name', 'user_name','email', 'contact','password', 'university', 'department', 'semester','adress','userType'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
