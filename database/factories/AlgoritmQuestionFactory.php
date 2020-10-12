<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AlgoritmQuestion;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(AlgoritmQuestion::class, function (Faker $faker) {
    return [
        'question'=>$this->faker->text($maxNbChars = 200),
        'algoritm_id'=>$this->faker->numberBetween($min=0, $max=10)
    ];
});
