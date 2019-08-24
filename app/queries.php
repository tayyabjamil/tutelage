<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queries extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'query1','query2', 'query3','query4','query5','query6',
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