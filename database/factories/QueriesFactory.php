<?php


use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\queries::class, function (Faker $faker) {
    return [
        'id','Title', 'Description','startDate','endDate','estimate'
                 
];
});