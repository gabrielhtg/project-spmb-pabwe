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
            insert_data_institusi::class,
            insert_social_media::class,
            add_hero_section_data::class,
            add_data_alamat_institusi::class,
            insert_data_akreditasi_dashboard::class,
            add_data_alamat_institusi::class,
            add_nomor_telepon::class,
            input_image_header_admisi::class,
            add_email::class,
            add_data_mbkm::class,
            add_infografis_admisi::class,
            insert_data_akreditasi_institusi::class,
            PengumumanSeeder::class,
            TestimoniSeeder::class,
            PrestasiSeeder::class,
        ]);
    }
}
