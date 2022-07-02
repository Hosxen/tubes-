<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ['value' => 'Aceh'],
            ['value' => 'Bali'],
            ['value' => 'Banten'],
            ['value' => 'DKI Jakarta'],
            ['value' => 'Jawa Barat'],
        ];

        foreach ($provinces as $province) {
            Province::updateOrCreate($province);
        }
    }
}
