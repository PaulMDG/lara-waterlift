<?php
/*
 * File name: PaymentStatusFactory.php
 * Last modified: 2021.01.17 at 11:45:15
 * Author: Paul MG - https://stilecreations.co.ke
 * Copyright (c) 2021
 */


use App\Models\PaymentStatus;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(PaymentStatus::class, function (Faker $faker) {
    return [
        'status' => $faker->text(48),
        'order' => $faker->numberBetween(1, 10)
    ];
});

$factory->state(PaymentStatus::class, 'status_more_127_char', function (Faker $faker) {
    return [
        'status' => $faker->paragraph(20),
    ];
});
