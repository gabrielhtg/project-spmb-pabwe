<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_email extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('email')->insert([
            [
                'nama' => 'Email Info',
                'email' => 'info@del.ac.id',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Karir',
                'email' => 'karir@del.ac.id',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
