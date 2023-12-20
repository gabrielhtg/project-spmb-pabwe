<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class add_mitra extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mitras')->insert
        ([
            [
                'nama' => 'Yayasan Tanoto Foundation',
                'logo' => 'assets/img/dashboard/mitra/tanoto.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'PT. Mayora Indah, TBK',
                'logo' => 'assets/img/dashboard/mitra/mayora.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Kampus Merdeka',
                'logo' => 'assets/img/dashboard/mitra/kampusmerdeka.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'PT Huawei Tech Investment ',
                'logo' => 'assets/img/dashboard/mitra/huawei.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'PT Bank Rakyat Indonesia',
                'logo' => 'assets/img/dashboard/mitra/bri.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Universitas Telkom',
                'logo' => 'assets/img/dashboard/mitra/telkom.jpg',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'PT Bank Mandiri (Persero) Tbk',
                'logo' => 'assets/img/dashboard/mitra/MANDIRI.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'PT Jasa Raharja',
                'logo' => 'assets/img/dashboard/mitra/jasaraharja.jpg',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'PT Indonesia AirAsia',
                'logo' => 'assets/img/dashboard/mitra/airasia.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'BGI Collage',
                'logo' => 'assets/img/dashboard/mitra/bgi.png',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
