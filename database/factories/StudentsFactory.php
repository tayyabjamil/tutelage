<?php


use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Students::class, function (Faker $faker) {
    return [
                     'username' => Str::random(10),
                    'first_name' => Str::random(10),
                    'last_name' => Str::random(10),
                    'email' => Str::random(10).'@gmail.com',
                    'password' => Str::random(10),
                    'university' => Str::random(10),
                    'deparment' => Str::random(10),
                    'semester' => Str::random(10),
                    
                 
];
});