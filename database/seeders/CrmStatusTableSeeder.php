<?php

namespace Database\Seeders;

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
                'created_at' => '2021-09-06 07:23:26',
                'updated_at' => '2021-09-06 07:23:26',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2021-09-06 07:23:26',
                'updated_at' => '2021-09-06 07:23:26',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2021-09-06 07:23:26',
                'updated_at' => '2021-09-06 07:23:26',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
