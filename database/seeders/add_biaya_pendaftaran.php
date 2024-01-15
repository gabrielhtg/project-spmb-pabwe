<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_biaya_pendaftaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biaya_pendaftaran')->insert([
          [
            'jlr_Pen'=>'PMDK',
            'biayaPen'=>'0.000',
          ],
          [
            'jlr_Pen'=>'JPS (New)',
            'biayaPen'=>'100000.000',
          ],
          [
            'jlr_Pen'=>'USM 1',
            'biayaPen'=>'125000.000',
          ],
          [
            'jlr_Pen'=>'USM 2',
            'biayaPen'=>'150000.000',
          ],
          [
            'jlr_Pen'=>'USM 3',
            'biayaPen'=>'175000.000',
          ],
          [
            'jlr_Pen'=>'UTBK',
            'biayaPen'=>'175000.000',
          ],
        ]);
    }
}
