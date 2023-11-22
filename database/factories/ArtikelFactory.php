<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artikel;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Artikel::class, function (Faker $faker) {
    $name = $faker->sentence(6);
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'deskripsi' => $faker->paragraph,
        'status' => $faker->randomElement(['aktif']),
    ];
});
