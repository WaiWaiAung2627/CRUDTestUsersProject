<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $this->faker->name,
        'email' => $this->faker->email,
        'password' => $this->faker->text,
        'confirmpassword' => $this->faker->text,
    ];
});
