<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Citasdetalle;
use Faker\Generator as Faker;

$factory->define(Citasdetalle::class, function (Faker $faker) {

    return [
        'id_detallecita' => $faker->randomDigitNotNull,
        'id_cita' => $faker->randomDigitNotNull
    ];
});
