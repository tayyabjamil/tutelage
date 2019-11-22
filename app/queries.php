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
          'profile_id',
          
          'title',
          'type',
          'toDate',
          'fromDate',
          'estimateAmount',
          'description',
          'people',    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
       
    ];
}