<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    $name = $faker->sentence(3);
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'deskripsi' => $faker->paragraph,
        'status' => $faker->randomElement(['aktif']),
        'tgl_mulai' => $faker->dateTimeThisMonth(),
    ];
});
