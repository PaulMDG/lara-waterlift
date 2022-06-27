<?php
/*
 * File name: FaqCategoriesTableSeeder.php
 * Last modified: 2021.03.01 at 21:56:10
 * Author: Paul MG - https://stilecreations.co.ke
 * Copyright (c) 2021
 */

use App\Models\FaqCategory;
use Illuminate\Database\Seeder;

class FaqCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq_categories')->delete();
        factory(FaqCategory::class, 5)->create();
    }
}
