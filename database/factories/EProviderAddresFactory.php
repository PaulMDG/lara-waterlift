<?php
/*
 * File name: EProviderAddresFactory.php
 * Last modified: 2021.04.20 at 11:19:32
 * Author: Paul MG - https://stilecreations.co.ke
 * Copyright (c) 2021
 */


use App\Models\Address;
use App\Models\EProvider;
use App\Models\EProviderAddress;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(EProviderAddress::class, function (Faker $faker) {
    return [
        'address_id' => Address::all()->random()->id,
        'e_provider_id' => EProvider::all()->random()->id
    ];
});
