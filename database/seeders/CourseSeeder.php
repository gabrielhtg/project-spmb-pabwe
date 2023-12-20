<?php

namespace Database\Seeders;


use App\Models\Major;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {   
        $majors = Major::all();

        foreach ($majors as $major) {
            
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'MAS1101',
                'nama' => 'Matematika Dasar',
                'sks' => '4',
                'semester' => 1,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'KUS1101',
                'nama' => 'Bahasa Inggris I',
                'sks' => '2',
                'semester' => 1,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'FIS1102',
                'nama' => 'Fisika Dasar IB',
                'sks' => '3',
                'semester' => 1,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '10S1001',
                'nama' => 'Matematika Diskrit',
                'sks' => '3',
                'semester' => 1,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'KUS1102',
                'nama' => 'Pembentukan Karakter Del',
                'sks' => '2',
                'semester' => 1,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'MAS1201',
                'nama' => '	Matematika Dasar II',
                'sks' => '4',
                'semester' => 2,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'KUS1201',
                'nama' => 'Bahasa Inggris II',
                'sks' => '2',
                'semester' => 2,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'KUS1201',
                'nama' => 'Bahasa Inggris II',
                'sks' => '2',
                'semester' => 2,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '12S2102',
                'nama' => '	Basis Data',
                'sks' => '4',
                'semester' => 3,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'MAS2001',
                'nama' => 'Probabilitas dan Statistika',
                'sks' => '3',
                'semester' => 3,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '10S2202',
                'nama' => 'Jaringan Komputer',
                'sks' => '3',
                'semester' => 4,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '10S2201',
                'nama' => 'Aljabar Linier',
                'sks' => '3',
                'semester' => 4,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '11S3109',
                'nama' => 'Pengembangan Aplikasi Berbasis Web',
                'sks' => '4',
                'semester' => 5,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '10S3109',
                'nama' => 'Kecerdasan Buatan',
                'sks' => '3',
                'semester' => 5,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'KUS2001',
                'nama' => 'Bahasa Inggris III',
                'sks' => '2',
                'semester' => 6,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '11S3204',
                'nama' => 'Keamanan Perangkat Lunak',
                'sks' => '3',
                'semester' => 6,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '11S4190',
                'nama' => 'Kerja Praktik',
                'sks' => '3',
                'semester' => 7,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '11S4093',
                'nama' => 'Tugas Akhir 1',
                'sks' => '4',
                'semester' => 7,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => 'TIS3001',
                'nama' => 'Keteknowiraan',
                'sks' => '3',
                'semester' => 8,
            ]);
            DB::table('courses')->insert([
                'kode_prodi' => $major->kode_prodi,
                'kode_mk' => '11S4030',
                'nama' => 'UI/UX Design',
                'sks' => '3',
                'semester' => 8,
            ]);

        }

    }
}