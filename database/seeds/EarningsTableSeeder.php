<?php
/*
 * File name: EarningsTableSeeder.php
 * Last modified: 2021.03.01 at 21:22:30
 * Author: Paul MG - https://stilecreations.co.ke
 * Copyright (c) 2021
 */

use Illuminate\Database\Seeder;

class EarningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('earnings')->delete();
    }
}
