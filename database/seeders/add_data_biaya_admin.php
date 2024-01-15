<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_data_biaya_admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biaya_admin')->insert([
            'biayaasrama'=>'300000.000',
            'biayamakan'=>'30000.000',
            'biayawisuda'=>'1000000.000',
            'biayadeposit'=>'1000000.000',
            'biayatingkatakhir'=>'500000.000',

        ]);
    }
}
