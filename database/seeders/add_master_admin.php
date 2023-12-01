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
        DB::table('adminModel')->insert([
            'username' => 'adminModel',
            'password' => Hash::make('adminModel'),
            'firstname' => 'Master',
            'lastname' => 'Admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
