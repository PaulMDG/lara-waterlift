<?php
/*
 * File name: EServiceTest.php
 * Last modified: 2021.02.05 at 13:07:43
 * Author: Paul MG - https://stilecreations.co.ke
 * Copyright (c) 2021
 */

namespace Models;

use App\Models\EService;
use Tests\TestCase;

class EServiceTest extends TestCase
{

    public function testGetAvailableAttribute()
    {
        $eService = EService::find(32);
        self::assertTrue($eService->available);
    }
}
