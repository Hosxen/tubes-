<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = [
            [
                'institute_name' => 'UTD PMI Provinsi Lampung MASJID AL FALAH',
                'address' => 'BANDAR LAMPUNG',
                'time' => '2021-12-06',
                'donor_plan' => 30,
            ],
            [
                'institute_name' => 'UTD PMI Kabupaten Tegal Desa Kedawung Bojong',
                'address' => 'Desa Kedawung Bojong',
                'time' => '2021-12-06',
                'donor_plan' => 40,
            ],
            [
                'institute_name' => 'UTD PMI Kota Palembang RS PUSRI',
                'address' => 'RS PUSRI PALEMBANG',
                'time' => '2021-12-06',
                'donor_plan' => 50,
            ],
            [
                'institute_name' => 'UTD PMI Kota Palembang RS PUSRI',
                'address' => 'GEDUNG SERBA GUNA PT.PUSRI',
                'time' => '2021-12-06',
                'donor_plan' => 250,
            ],
            [
                'institute_name' => 'UTD PMI Kota Tangerang Daan Mogot Mall',
                'address' => 'Jl, Daan Mogot km. 16',
                'time' => '2021-12-06',
                'donor_plan' => 50,
            ],
        ];

        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }
    }
}
