<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kandidat;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Kandidat::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'event_id' => $faker->numberBetween(1, 5),
        'deskripsi' => $faker->paragraph,
        'status' => $faker->randomElement(['aktif']),
    ];
});
