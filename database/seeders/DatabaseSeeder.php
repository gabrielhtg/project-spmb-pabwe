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
//            add_master_admin::class,
//            add_profile_pict_admin::class,
//            insert_data_institusi::class,
//            insert_social_media::class,
            add_hero_section_data::class
        ]);
    }
}
