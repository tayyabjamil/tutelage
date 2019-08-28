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
          'id',
          'Title',
          'Description',
          'estimate',
          'startDate',
          'endDate',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
       
    ];
}