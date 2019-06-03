<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale.' '.$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'nickname' => explode(' ',$faker->unique()->name)[0],
        'lvl'=>10,
        'current_xp'=>200,
        'possition'=>'student',
        'profile_picture'=>'testpic.png',
        'about'=>'something about me'
    ];
});
