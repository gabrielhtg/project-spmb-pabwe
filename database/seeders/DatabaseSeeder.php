<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           add_master_admin::class,
            add_profile_pict_admin::class,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
