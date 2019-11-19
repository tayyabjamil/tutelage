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
          
          'profile_id',
          'title',
          'type',
          'toDate',
          'fromDate',
          'estimateAmount',
          'adress',
          'description',
    
        ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
       
    ];
}