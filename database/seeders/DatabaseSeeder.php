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
            add_jenis_test::class,
            add_lokasi_test::class,
            insert_data_akreditasi_institusi::class,
            FacultySeeder::class,
            MajorSeeder::class,
            CourseSeeder::class,
            EmployeeSeeder::class,
            PengumumanSeeder::class,
            PrestasiSeeder::class,
            add_beasiswa::class,
            add_fasilitas::class,
            add_faq::class,
            add_mitra::class,
            TestimoniSeeder::class,
            add_biaya_studi::class,
            add_biaya_pendaftaran::class,
            add_data_biaya_admin::class,
            add_dropdown_admisi::class,
            add_jadwal_pendaftaran::class,
            add_persyaratan_prodi::class,
            add_pdf_biaya::class,
            add_pedoman_pendaftaran::class,
            add_sub_jalur_pendaftaran::class,
            add_data_jadwal_ujian::class,
            TestimoniSeeder::class,
        ]);
    }
}