<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {

    $fileName = $this->faker->unique()->numberBetween(1,10) . '.jpg';

    return [
        'path' => "images/{$fileName}",
    ];
});