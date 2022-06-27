<?php
/*
 * File name: BookingsTableSeeder.php
 * Last modified: 2021.03.01 at 21:41:49
 * Author: Paul MG - https://stilecreations.co.ke
 * Copyright (c) 2021
 */

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->delete();
    }
}
