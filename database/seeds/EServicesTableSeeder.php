<?php
/*
 * File name: EServicesTableSeeder.php
 * Last modified: 2021.03.01 at 21:22:30
 * Author: Paul MG - https://stilecreations.co.ke
 * Copyright (c) 2021
 */

use App\Models\EService;
use Illuminate\Database\Seeder;

class EServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('e_services')->delete();
        factory(EService::class, 40)->create();
    }
}
