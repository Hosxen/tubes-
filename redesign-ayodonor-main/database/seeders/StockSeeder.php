<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\Province;
use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = [];

        $bloodTypes = ['A', 'AB', 'B', 'O'];

        $components = Component::all();

        $provinces = Province::all();

        foreach ($bloodTypes as $i => $bloodType) {
            foreach ($components as $component) {
                foreach ($provinces as $province) {
                    $stocks[] = [
                        'blood_type' => $bloodType,
                        'component_id' => $component['id'],
                        'province_id' => $province['id'],
                        'value' => rand(30, 200),
                    ];
                }
            }
        }

        foreach ($stocks as $stock) {
            Stock::updateOrCreate(
                [
                    'blood_type' => $stock['blood_type'],
                    'component_id' => $stock['component_id'],
                    'province_id' => $stock['province_id'],
                ],
                [
                    'value' => $stock['value'],
                ]
            );
        }
    }
}
