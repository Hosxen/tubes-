<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
            [
                'utd_name' => 'UTD PMI Kota Banda Aceh',
                'province' => 'Aceh',
                'address' => 'Komp. RSU Dr. M. Zainal Abidin, Jl. Stadion Lampineung No.3 PO Box. 175, Banda A',
                'phone' => '(0651) 32281',
                'fax' => '31316',
            ],
            [
                'utd_name' => 'UTD PMI Kota Denpasar',
                'province' => 'Bali',
                'address' => 'RSUD Wangaya,JL. Kartini No. 133, Denpasar Bali',
                'phone' => '(0361) 480262',
                'fax' => '(0361) 480262',
            ],
            [
                'utd_name' => 'UTD PMI Kabupaten Serang',
                'province' => 'Banten',
                'address' => 'Jl. Rumah Sakit No. 1, Serang',
                'phone' => '(0254) 218566',
                'fax' => '218566',
            ],
            [
                'utd_name' => 'UTD PMI Kota Yogyakarta',
                'province' => 'Daerah Istimewa Yogyakarta',
                'address' => 'Jl. Tegalgendu No. 25 Kotagede Yogyakarta. 55172',
                'phone' => '(0274) 372176',
                'fax' => '379212',
            ],
            [
                'utd_name' => 'UTDD PMI DKI Jakarta',
                'province' => 'DKI Jakarta',
                'address' => 'Jl.Kramat Raya No. 47, Jakarta - 10450',
                'phone' => '(021) 906666',
                'fax' => '3101107',
            ],
            [
                'utd_name' => 'UTD PMI Kabupaten Garut',
                'province' => 'Jawa Barat',
                'address' => 'Jln. Proklamasi No. 3, Tarogong Kidul, Garut',
                'phone' => '(0262) 233672',
                'fax' => '2248474',
            ],
            [
                'utd_name' => 'UTD PMI Kabupaten Karawang',
                'province' => 'Jawa Barat',
                'address' => 'Jl. Jend. Ahmad Yani 68, Karawang',
                'phone' => '(0267) 405190',
                'fax' => '405190',
            ],
            [
                'utd_name' => 'UTD PMI Kota Pekanbaru',
                'province' => 'Riau',
                'address' => 'Jl. Diponegoro 36 Pekanbaru',
                'phone' => '(0761) 23126',
                'fax' => '23126 R.36355',
            ],
        ];

        Contact::truncate();
        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
