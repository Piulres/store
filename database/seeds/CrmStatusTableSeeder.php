<?php

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2021-07-07 21:34:23',
                'updated_at' => '2021-07-07 21:34:23',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2021-07-07 21:34:23',
                'updated_at' => '2021-07-07 21:34:23',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2021-07-07 21:34:23',
                'updated_at' => '2021-07-07 21:34:23',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
