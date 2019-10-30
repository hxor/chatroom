<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'body' => $faker->sentence(5)
    ];
});
