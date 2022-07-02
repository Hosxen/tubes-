<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $components = [
            ['value' => 'AHF'],
            ['value' => 'BC'],
            ['value' => 'FFP'],
            ['value' => 'FP'],
            ['value' => 'LP'],
        ];

        foreach ($components as $component) {
            Component::updateOrCreate($component);
        }
    }
}
