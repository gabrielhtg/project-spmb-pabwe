<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class add_master_admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'firstname' => 'Master',
            'lastname' => 'Admin',
            'master_admin' => true,
            'created_by' => 'IF 21 - BANDAR',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
