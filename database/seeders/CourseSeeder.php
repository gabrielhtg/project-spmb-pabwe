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
            
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS1102',
            'nama' => 'Pembentukan Karakter Del',
            'sks' => 2,
            'semester' => 1,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'MAS1101',
            'nama' => 'Matematika Dasar I',
            'sks' => 4,
            'semester' => 1,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'TIS1101',
            'nama' => 'Inovasi Digital',
            'sks' => 2,
            'semester' => 1,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS1101',
            'nama' => 'Bahasa Inggris I',
            'sks' => 2,
            'semester' => 1,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS1001',
            'nama' => 'Penulisan Karya Ilmiah',
            'sks' => 2,
            'semester' => 1,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '10S1001',
            'nama' => 'Matematika Diskrit',
            'sks' => 3,
            'semester' => 1,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'FIS1102',
            'nama' => 'Fisika Dasar IB',
            'sks' => 3,
            'semester' => 1,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'MAS1201',
            'nama' => 'Matematika Dasar II',
            'sks' => 4,
            'semester' => 2,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS1201',
            'nama' => 'Bahasa Inggris II',
            'sks' => 2,
            'semester' => 2,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS1202',
            'nama' => 'Pengantar Rekayasa dan Desain',
            'sks' => 2,
            'semester' => 2,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'FIS1202',
            'nama' => 'Fisika Dasar IIB',
            'sks' => 3,
            'semester' => 2,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S1213',
            'nama' => 'Rekayasa Perangkat Lunak',
            'sks' => 3,
            'semester' => 2,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '10S1201',
            'nama' => 'Dasar Pemrograman',
            'sks' => 4,
            'semester' => 2,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3002',
            'nama' => 'Agama dan Etika',
            'sks' => 2,
            'semester' => 3,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'MAS2001',
            'nama' => 'Probabilitas dan Statistika',
            'sks' => 3,
            'semester' => 3,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '12S2102',
            'nama' => 'Basis Data',
            'sks' => 4,
            'semester' => 3,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S2110',
            'nama' => 'Pemrograman Berorientasi Objek',
            'sks' => 4,
            'semester' => 3,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '14S2106',
            'nama' => 'Sistem Digital',
            'sks' => 3,
            'semester' => 3,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '10S2001',
            'nama' => 'Arsitektur dan Organisasi Komputer',
            'sks' => 3,
            'semester' => 3,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '10S2201',
            'nama' => 'Aljabar Linier',
            'sks' => 3,
            'semester' => 4,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '10S2202',
            'nama' => 'Jaringan Komputer',
            'sks' => 3,
            'semester' => 4,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '10S2203',
            'nama' => 'Sistem Operasi',
            'sks' => 3,
            'semester' => 4,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '10S2102',
            'nama' => 'Algoritma dan Struktur Data',
            'sks' => 4,
            'semester' => 4,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S2206',
            'nama' => 'Logika Informatika',
            'sks' => 3,
            'semester' => 4,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S2203',
            'nama' => 'Interaksi Manusia Komputer',
            'sks' => 3,
            'semester' => 4,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S3109',
            'nama' => 'Pengembangan Aplikasi Berbasis Web',
            'sks' => 4,
            'semester' => 5,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S3101',
            'nama' => 'Analisis dan Perancangan Perangkat Lunak',
            'sks' => 3,
            'semester' => 5,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '10S3109',
            'nama' => 'Kecerdasan Buatan',
            'sks' => 3,
            'semester' => 5,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S3116',
            'nama' => 'Teori Bahasa Formal dan Automata',
            'sks' => 3,
            'semester' => 5,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S3112',
            'nama' => 'Pengujian dan Penjaminan Mutu Perangkat Lunak',
            'sks' => 3,
            'semester' => 5,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S3105',
            'nama' => 'Kriptografi dan Keamanan Informasi',
            'sks' => 3,
            'semester' => 5,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS2001',
            'nama' => 'Bahasa Inggris III',
            'sks' => 2,
            'semester' => 6,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S3204',
            'nama' => 'Keamanan Perangkat Lunak',
            'sks' => 3,
            'semester' => 6,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S3211',
            'nama' => 'Pengembangan Aplikasi Mobile',
            'sks' => 4,
            'semester' => 6,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S3207',
            'nama' => 'Pembelajaran Mesin',
            'sks' => 3,
            'semester' => 6,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S3208',
            'nama' => 'Manajemen Proyek Perangkat Lunak',
            'sks' => 4,
            'semester' => 6,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '13S3215',
            'nama' => 'Sistem Paralel dan Terdistribusi',
            'sks' => 3,
            'semester' => 6,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4190',
            'nama' => 'Kerja Praktik',
            'sks' => 3,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4093',
            'nama' => 'Tugas Akhir 1',
            'sks' => 4,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4028',
            'nama' => 'Rekayasa Perangkat Lunak Berbasis Komponen',
            'sks' => 3,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4031',
            'nama' => 'Ethical Hacking and Penetration Testing',
            'sks' => 3,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4037',
            'nama' => 'Pemrosesan Bahasa Alami',
            'sks' => 3,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4026',
            'nama' => 'Pengembangan Aplikasi Platform Khusus',
            'sks' => 3,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3051',
            'nama' => 'Studi/Proyek Independen 1',
            'sks' => 1,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3052',
            'nama' => 'Studi/Proyek Independen 2',
            'sks' => 2,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3053',
            'nama' => 'Studi/Proyek Independen 3',
            'sks' => 3,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3054',
            'nama' => 'Studi/Proyek Independen 4',
            'sks' => 4,
            'semester' => 7,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3055',
            'nama' => 'Studi/Proyek Independen 5',
            'sks' => 5,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3056',
            'nama' => 'Studi/Proyek Independen 6',
            'sks' => 6,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '12S4056',
            'nama' => 'Visualisasi Data',
            'sks' => 3,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4081',
            'nama' => 'Magang 1',
            'sks' => 1,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4086',
            'nama' => 'Magang 6',
            'sks' => 6,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4082',
            'nama' => 'Magang 2',
            'sks' => 2,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4083',
            'nama' => 'Magang 3',
            'sks' => 3,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4084',
            'nama' => 'Magang 4',
            'sks' => 4,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4085',
            'nama' => 'Magang 5',
            'sks' => 5,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3071',
            'nama' => 'Penelitian 1',
            'sks' => 1,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3072',
            'nama' => 'Penelitian 2',
            'sks' => 2,
            'semester' => 7,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3073',
            'nama' => 'Penelitian 3',
            'sks' => 3,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3074',
            'nama' => 'Penelitian 4',
            'sks' => 4,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3075',
            'nama' => 'Penelitian 5',
            'sks' => 5,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3076',
            'nama' => 'Penelitian 6',
            'sks' => 6,
            'semester' => 7,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4096',
            'nama' => 'International Student Program',
            'sks' => 15,
            'semester' => 7,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS4101',
            'nama' => 'Pancasila dan Kewarganegaraan',
            'sks' => 2,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'TIS3001',
            'nama' => 'Keteknowiraan',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => 'KUS3001',
            'nama' => 'Analisis Dampak Lingkungan',
            'sks' => 2,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4094',
            'nama' => 'Tugas Akhir 2',
            'sks' => 4,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4095',
            'nama' => 'Kapita Selekta',
            'sks' => 1,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4030',
            'nama' => 'UI/UX Design',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4025',
            'nama' => 'Pembangunan Aplikasi Berbasis Service',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '31S4201',
            'nama' => 'Etika Keprofesian',
            'sks' => 2,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '12S4005',
            'nama' => 'Hukum dan Etika Siber',
            'sks' => 2,
            'semester' => 8,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4032',
            'nama' => 'Information Security Governance and Risk Management',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4035',
            'nama' => 'Interpretasi dan Pengolahan Citra',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '13S4033',
            'nama' => 'Keamanan Jaringan',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4036',
            'nama' => 'Pembelajaran Mesin Lanjut',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4040',
            'nama' => 'Pemodelan dan Simulasi',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4027',
            'nama' => 'Rekayasa Perangkat Lunak Spesifik Domain',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4038',
            'nama' => 'Representasi Pengetahuan dan Penalaran',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4029',
            'nama' => 'Strategi Algoritma',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4071',
            'nama' => 'Studi/Proyek Mandiri 1',
            'sks' => 1,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4072',
            'nama' => 'Studi/Proyek Mandiri 2',
            'sks' => 2,
            'semester' => 8,
        ]);
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4073',
            'nama' => 'Studi/Proyek Mandiri 3',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '12S4059',
            'nama' => 'Publikasi Ilmiah',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '14S4023',
            'nama' => 'Keamanan Siber',
            'sks' => 3,
            'semester' => 8,
        ]);
        
        DB::table('courses')->insert([
            'kode_prodi' => 'ifs',
            'kode_mk' => '11S4041',
            'nama' => 'Pembangunan Aplikasi Multi Platform',
            'sks' => 3,
            'semester' => 8,
        ]);
                                                                                   
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'KUS1102',
                'nama' => 'Pembentukan Karakter Del',
                'sks' => 2,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'MAS1101',
                'nama' => 'Matematika Dasar I',
                'sks' => 4,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'TIS1101',
                'nama' => 'Inovasi Digital',
                'sks' => 2,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'KUS1101',
                'nama' => 'Bahasa Inggris I',
                'sks' => 2,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'FIS1103',
                'nama' => 'Fisika Dasar',
                'sks' => 4,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S1101',
                'nama' => 'Dasar Sistem Informasi',
                'sks' => 3,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S1102',
                'nama' => 'Pemrograman Visual',
                'sks' => 2,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'MAS1201',
                'nama' => 'Matematika Dasar II',
                'sks' => 4,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'KUS1201',
                'nama' => 'Bahasa Inggris II',
                'sks' => 2,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'KUS1001',
                'nama' => 'Penulisan Karya Ilmiah',
                'sks' => 2,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'KUS1202',
                'nama' => 'Pengantar Rekayasa dan Desain',
                'sks' => 2,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '10S1001',
                'nama' => 'Matematika Diskrit',
                'sks' => 3,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '10S1002',
                'nama' => 'Pemrograman Prosedural',
                'sks' => 2,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '10S2001',
                'nama' => 'Arsitektur dan Organisasi Komputer',
                'sks' => 3,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'MAS2001',
                'nama' => 'Probabilitas dan Statistika',
                'sks' => 3,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'KUS2001',
                'nama' => 'Bahasa Inggris III',
                'sks' => 2,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '10S2101',
                'nama' => 'Algoritma dan Struktur Data',
                'sks' => 3,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '11S1213',
                'nama' => 'Rekayasa Perangkat Lunak',
                'sks' => 3,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S2102',
                'nama' => 'Basis Data',
                'sks' => 4,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S2101',
                'nama' => 'Organisasi dan Manajemen',
                'sks' => 3,
                'semester' => 3,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '10S2201',
                'nama' => 'Aljabar Linier',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '10S2202',
                'nama' => 'Jaringan Komputer',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '10S2203',
                'nama' => 'Sistem Operasi',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S2201',
                'nama' => 'Analisis dan Desain Sistem',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S2202',
                'nama' => 'Interaksi Manusia-Komputer',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S2203',
                'nama' => 'Pemrograman Berorientasi Objek',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'KUS4101',
                'nama' => 'Pancasila dan Kewarganegaraan',
                'sks' => 2,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '10S3001',
                'nama' => 'Kecerdasan Buatan',
                'sks' => 4,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S3102',
                'nama' => 'Basis Data Lanjut',
                'sks' => 3,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S3103',
                'nama' => 'Manajemen Proyek Sistem Informasi',
                'sks' => 3,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S3101',
                'nama' => 'Pemrograman dan Pengujian Aplikasi Web',
                'sks' => 4,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'TIS3001',
                'nama' => 'Keteknowiraan',
                'sks' => 3,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'KUS3001',
                'nama' => 'Analisis Dampak Lingkungan',
                'sks' => 2,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => 'KUS3002',
                'nama' => 'Agama dan Etika',
                'sks' => 2,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S3201',
                'nama' => 'Perencanaan Sumber Daya Perusahaan',
                'sks' => 4,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S3202',
                'nama' => 'Gudang Data dan Kecerdasan Bisnis',
                'sks' => 3,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S3203',
                'nama' => 'Proyek Sistem Informasi',
                'sks' => 4,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S3204',
                'nama' => 'Keamanan Sistem',
                'sks' => 3,
                'semester' => 6,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4001',
                'nama' => 'Tugas Akhir I',
                'sks' => 4,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4003',
                'nama' => 'Kerja Praktik',
                'sks' => 3,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4004',
                'nama' => 'Sertifikasi Profesi',
                'sks' => 3,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4051',
                'nama' => 'Keamanan Sistem Lanjut',
                'sks' => 3,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4054',
                'nama' => 'Penambangan Data',
                'sks' => 3,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '11S4037',
                'nama' => 'Pemrosesan Bahasa Alami',
                'sks' => 3,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4052',
                'nama' => 'Aplikasi E-Bisnis',
                'sks' => 3,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4056',
                'nama' => 'Visualisasi Data',
                'sks' => 3,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4053',
                'nama' => 'Audit Teknologi Informasi',
                'sks' => 3,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '21S4080',
                'nama' => 'Akuntasi Dasar',
                'sks' => 3,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4073',
                'nama' => 'Magang Industri Paruh Waktu',
                'sks' => 14,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4074',
                'nama' => 'Studi Mandiri Paruh Waktu',
                'sks' => 14,
                'semester' => 7,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4002',
                'nama' => 'Tugas Akhir II',
                'sks' => 4,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4005',
                'nama' => 'Hukum dan Etika Siber',
                'sks' => 2,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4006',
                'nama' => 'Kapita Selekta',
                'sks' => 2,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4058',
                'nama' => 'Pengolahan Data Besar',
                'sks' => 3,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4055',
                'nama' => 'Sistem Temu Balik Informasi',
                'sks' => 3,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '21S4201',
                'nama' => 'Etika Profesional',
                'sks' => 2,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '11S4030',
                'nama' => 'UI/UX Design',
                'sks' => 3,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4081',
                'nama' => 'Pengenalan Basis Data dan Sistem Informasi',
                'sks' => 3,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4082',
                'nama' => 'Penambangan Data',
                'sks' => 3,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4057',
                'nama' => 'Tata Kelola Data',
                'sks' => 3,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4059',
                'nama' => 'Publikasi Ilmiah',
                'sks' => 3,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4071',
                'nama' => 'Magang Industri',
                'sks' => 20,
                'semester' => 8,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'iss',
                'kode_mk' => '12S4072',
                'nama' => 'Studi Mandiri',
                'sks' => 20,
                'semester' => 8,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU31101',
                'nama' => 'Bahasa Inggris I',
                'sks' => 2,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'TI31101',
                'nama' => 'Inovasi Digital',
                'sks' => 2,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU31102',
                'nama' => 'Pembentukan Karakter Del',
                'sks' => 2,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1031101',
                'nama' => 'Dasar Pemrograman',
                'sks' => 3,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1031102',
                'nama' => 'Matematika Diskrit',
                'sks' => 3,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1031103',
                'nama' => 'Arsitektur dan Organisasi Komputer',
                'sks' => 2,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1131105',
                'nama' => 'Rekayasa Perangkat Lunak',
                'sks' => 3,
                'semester' => 1,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1131104',
                'nama' => 'Pengembangan Situs Web I',
                'sks' => 3,
                'semester' => 1,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU31201',
                'nama' => 'Bahasa Inggris II',
                'sks' => 2,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1031201',
                'nama' => 'Algoritma & Struktur Data',
                'sks' => 3,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1031202',
                'nama' => 'Sistem Operasi',
                'sks' => 3,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1131203',
                'nama' => 'Perancangan Perangkat Lunak',
                'sks' => 3,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1131204',
                'nama' => 'Pengembangan Situs Web II',
                'sks' => 3,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1131205',
                'nama' => 'Pengenalan Basis Data',
                'sks' => 3,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1131290',
                'nama' => 'Proyek Akhir Tahun I',
                'sks' => 3,
                'semester' => 2,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU32101',
                'nama' => 'Bahasa Inggris III',
                'sks' => 2,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'MA32101',
                'nama' => 'Probabilitas dan Statistika',
                'sks' => 3,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1032101',
                'nama' => 'Jaringan Komputer',
                'sks' => 3,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1132102',
                'nama' => 'Pemrograman Berorientasi Objek',
                'sks' => 3,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1132103',
                'nama' => 'Pengembangan Aplikasi Mobile',
                'sks' => 3,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1132104',
                'nama' => 'Perancangan Antarmuka Pengguna',
                'sks' => 3,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1132205',
                'nama' => 'Sistem Basis Data',
                'sks' => 3,
                'semester' => 3,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU32201',
                'nama' => 'Bahasa Inggris IV',
                'sks' => 2,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU32202',
                'nama' => 'Penulisan Karya Ilmiah',
                'sks' => 2,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1032201',
                'nama' => 'Aljabar Linier',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1132202',
                'nama' => 'Pemrograman Teknologi. NET',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1132203',
                'nama' => 'Pengembangan Aplikasi Terdistribusi',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1132204',
                'nama' => 'Pengujian dan Kualitas Perangkat Lunak',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1132290',
                'nama' => 'Proyek Akhir Tahun II',
                'sks' => 3,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KUS3051',
                'nama' => 'Studi/Proyek Independen 1',
                'sks' => 1,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KUS3061',
                'nama' => 'Magang 1',
                'sks' => 1,
                'semester' => 4,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU33101',
                'nama' => 'Bahasa Inggris V',
                'sks' => 2,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1033101',
                'nama' => 'Teknologi Kecerdasan Buatan',
                'sks' => 3,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1133102',
                'nama' => 'Algoritma Lanjut',
                'sks' => 3,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1133103',
                'nama' => 'Java untuk Pemrograman Aplikasi Enterprise',
                'sks' => 3,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1133104',
                'nama' => 'Keamanan Perangkat Lunak',
                'sks' => 3,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1133190',
                'nama' => 'Tugas Akhir I',
                'sks' => 3,
                'semester' => 5,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'TI33101',
                'nama' => 'Keteknowiraan',
                'sks' => 2,
                'semester' => 5,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU33201',
                'nama' => 'Bahasa Inggris VI',
                'sks' => 2,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU33202',
                'nama' => 'Agama & Etika',
                'sks' => 2,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KU33203',
                'nama' => 'Pancasila dan Kewarganegaraan',
                'sks' => 2,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1133201',
                'nama' => 'Administrasi Basis Data',
                'sks' => 2,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1133202',
                'nama' => 'Socio - Informatika dan Profesionalisme',
                'sks' => 2,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1133290',
                'nama' => 'Tugas Akhir II',
                'sks' => 4,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => '1133291',
                'nama' => 'Kerja Praktik',
                'sks' => 4,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KUS3052',
                'nama' => 'Studi/Proyek Independen 2',
                'sks' => 2,
                'semester' => 6,
            ]);
            
            DB::table('courses')->insert([
                'kode_prodi' => 'if3',
                'kode_mk' => 'KUS3062',
                'nama' => 'Magang 2',
                'sks' => 2,
                'semester' => 6,
            ]);

    DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU31101',
    'nama' => 'Bahasa Inggris I',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'TI31101',
    'nama' => 'Inovasi Digital',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU31102',
    'nama' => 'Pembentukan Karakter Del',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1031101',
    'nama' => 'Dasar Pemrograman',
    'sks' => 3,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1031102',
    'nama' => 'Matematika Diskrit',
    'sks' => 3,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1031103',
    'nama' => 'Arsitektur dan Organisasi Komputer',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1331104',
    'nama' => 'Pengembangan Situs Web I',
    'sks' => 3,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1331105',
    'nama' => 'Pengenalan Rekayasa Perangkat Lunak',
    'sks' => 3,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU31201',
    'nama' => 'Bahasa Inggris II',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1031201',
    'nama' => 'Algoritma & Struktur Data',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1031202',
    'nama' => 'Sistem Operasi',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1031203',
    'nama' => 'Aljabar Linier',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1331204',
    'nama' => 'Pengembangan Aplikasi Berbasis Internet',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1331205',
    'nama' => 'Proyek Akhir Tahun I',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1331206',
    'nama' => 'Pengenalan Basisdata',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU32101',
    'nama' => 'Bahasa Inggris III',
    'sks' => 2,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'MA32101',
    'nama' => 'Probabilitas dan Statistika',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1032101',
    'nama' => 'Jaringan Komputer',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1332102',
    'nama' => 'Pemrograman Sistem',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1332103',
    'nama' => 'Perancangan Antarmuka Pengguna',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1332104',
    'nama' => 'Virtualisasi Komputer',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1332105',
    'nama' => 'Dasar Elektronika',
    'sks' => 2,
    'semester' => 3,
]);


DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU32201',
    'nama' => 'Bahasa Inggris IV',
    'sks' => 2,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU32202',
    'nama' => 'Penulisan Karya Ilmiah',
    'sks' => 2,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1332201',
    'nama' => 'Antar Jaringan',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1332202',
    'nama' => 'Perangkat Lunak Sistem Jaringan',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1332203',
    'nama' => 'Proyek Akhir Tahun II',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1332204',
    'nama' => 'Sistem Terdistribusi',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1332205',
    'nama' => 'Sistem Tertanam',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU33101',
    'nama' => 'Bahasa Inggris V',
    'sks' => 2,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'TI33101',
    'nama' => 'Keteknowiraan',
    'sks' => 2,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333101',
    'nama' => 'Administrasi Jaringan',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333102',
    'nama' => 'Keamanan Jaringan',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333103',
    'nama' => 'Penerapan Infrastruktur Cloud',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333104',
    'nama' => 'Teknologi IoT',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333105',
    'nama' => 'Tugas Akhir I',
    'sks' => 3,
    'semester' => 5,
]);
DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU33201',
    'nama' => 'Bahasa Inggris VI',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU33202',
    'nama' => 'Agama & Etika',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KU33203',
    'nama' => 'Pancasila dan Kewarganegaraan',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333290',
    'nama' => 'Kerja Praktik',
    'sks' => 4,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333201',
    'nama' => 'Tugas Akhir II',
    'sks' => 4,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333202',
    'nama' => 'Etika Profesi',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333203',
    'nama' => 'Komunikasi Data',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => '1333204',
    'nama' => 'Pengembangan Profesi',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'ce3',
    'kode_mk' => 'KUS3054',
    'nama' => 'Studi/Proyek Independen 4',
    'sks' => 4,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU41101',
    'nama' => 'Pembentukan Karakter Del',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU41102',
    'nama' => 'Bahasa Inggris I',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'TI41101',
    'nama' => 'Inovasi Digital',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1041101',
    'nama' => 'Dasar Pemrograman',
    'sks' => 3,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1041102',
    'nama' => 'Matematika Diskrit',
    'sks' => 3,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1041103',
    'nama' => 'Arsitektur dan Organisasi Komputer',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1141104',
    'nama' => 'Pengembangan Situs Web I',
    'sks' => 3,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1141105',
    'nama' => 'Pengenalan Rekayasa Perangkat Lunak',
    'sks' => 3,
    'semester' => 1,
]);
DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU41201',
    'nama' => 'Bahasa Inggris II',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU41202',
    'nama' => 'Penulisan Karya Ilmiah',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1041202',
    'nama' => 'Sistem Operasi',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1141203',
    'nama' => 'Analisis Kebutuhan Perangkat Lunak',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1141204',
    'nama' => 'Pengembangan Situs Web II',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1141205',
    'nama' => 'Pengenalan Basis Data',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1141290',
    'nama' => 'Proyek Akhir Tahun I',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU42101',
    'nama' => 'Bahasa Inggris III',
    'sks' => 2,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1042101',
    'nama' => 'Jaringan Komputer',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1042102',
    'nama' => 'Algoritma dan Struktur Data',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1142103',
    'nama' => 'Pengembangan Perangkat Lunak Berorientasi Objek',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1142104',
    'nama' => 'Perancangan Antarmuka Pengguna',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1142105',
    'nama' => 'Sistem Basis Data',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1142106',
    'nama' => 'Logika Informatika',
    'sks' => 2,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU42201',
    'nama' => 'Bahasa Inggris IV',
    'sks' => 2,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'MA42201',
    'nama' => 'Probabilitas dan Statistik',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1142201',
    'nama' => 'Pemrograman Berorientasi Objek',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1142202',
    'nama' => 'Pengembangan Aplikasi Terdistribusi',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1142203',
    'nama' => 'Pengembangan Aplikasi Mobile',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1142290',
    'nama' => 'Proyek Akhir Tahun II',
    'sks' => 4,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU43101',
    'nama' => 'Bahasa Inggris V',
    'sks' => 2,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143101',
    'nama' => 'Pengujian Perangkat Lunak',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143102',
    'nama' => 'Algoritma Lanjut',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143103',
    'nama' => 'Kreativitas dan Inovasi',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143104',
    'nama' => 'Keamanan Perangkat Lunak',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143105',
    'nama' => 'Automata',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143106',
    'nama' => 'Metodologi Penelitian',
    'sks' => 2,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143203',
    'nama' => 'Pembelajaran Mesin',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU43201',
    'nama' => 'Bahasa Inggris VI',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU43202',
    'nama' => 'Agama dan Etika',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KU43203',
    'nama' => 'Pancasila dan Kewarganegaraan',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143201',
    'nama' => 'Etika Profesi',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143202',
    'nama' => 'Design Thinking',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143204',
    'nama' => 'Komputer dan Masyarakat',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1143290',
    'nama' => 'Proyek Akhir Tahun III',
    'sks' => 4,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KUS3052',
    'nama' => 'Studi/Proyek Independen 2',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KUS3054',
    'nama' => 'Studi/Proyek Independen 4',
    'sks' => 4,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KUS3056',
    'nama' => 'Studi/Proyek Independen 6',
    'sks' => 6,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'TI44101',
    'nama' => 'Keteknowiraan',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144101',
    'nama' => 'Arsitektur dan Perancangan Perangkat Lunak',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144102',
    'nama' => 'Manajemen Proyek',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144103',
    'nama' => 'Kualitas Perangkat Lunak',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144104',
    'nama' => 'Reenginering Perangkat Lunak',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144190',
    'nama' => 'Tugas Akhir I',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144105',
    'nama' => 'Kecerdasan Buatan',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KUS3063',
    'nama' => 'Magang 3',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'KUS3053',
    'nama' => 'Studi/Proyek Independen 3',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => 'TIS3001',
    'nama' => 'Keteknowiraan',
    'sks' => 3,
    'semester' => 7,
]);
DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144201',
    'nama' => 'Studi Mandiri / Sertifikasi Profesional',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144290',
    'nama' => 'Tugas Akhir II',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144291',
    'nama' => 'Kerja Praktik Industri',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'if4',
    'kode_mk' => '1144106',
    'nama' => 'UI/UX Design',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KUS1102',
    'nama' => 'Pembentukan Karakter Del',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'MAS1101',
    'nama' => 'Matematika Dasar I',
    'sks' => 4,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'FIS1101',
    'nama' => 'Fisika Dasar IA',
    'sks' => 4,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'TIS1101',
    'nama' => 'Inovasi Digital',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KUS1101',
    'nama' => 'Bahasa Inggris I',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KUS1001',
    'nama' => 'Penulisan Karya Ilmiah',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KIS1001',
    'nama' => 'Kimia Dasar B',
    'sks' => 3,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'MAS1201',
    'nama' => 'Matematika Dasar II',
    'sks' => 4,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'FIS1201',
    'nama' => 'Fisika Dasar IIA',
    'sks' => 4,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KUS1201',
    'nama' => 'Bahasa Inggris II',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KUS1202',
    'nama' => 'Pengantar Rekayasa dan Desain',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '10S1001',
    'nama' => 'Matematika Diskrit',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S1201',
    'nama' => 'Programming I',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S1202',
    'nama' => 'Praktikum Programming I',
    'sks' => 1,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S1203',
    'nama' => 'Pengantar Analisis Rangkaian',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '10S2101',
    'nama' => 'Algoritma dan Struktur Data',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2101',
    'nama' => 'Sistem Digital',
    'sks' => 4,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'MAS2101',
    'nama' => 'Matematika Teknik I',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2102',
    'nama' => 'Praktikum Sistem Digital',
    'sks' => 1,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2103',
    'nama' => 'Rangkaian Elektrik',
    'sks' => 4,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2104',
    'nama' => 'Praktikum Rangkaian Elektrik',
    'sks' => 1,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2105',
    'nama' => 'Basis Data',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'MAS2001',
    'nama' => 'Probabilitas dan Statistika',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '10S2203',
    'nama' => 'Sistem Operasi',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2201',
    'nama' => 'Programming II',
    'sks' => 2,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2203',
    'nama' => 'Elektronika I',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2204',
    'nama' => 'Praktikum Elektronika I',
    'sks' => 1,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2205',
    'nama' => 'Sinyal dan Sistem',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'MAS2102',
    'nama' => 'Matematika Teknik II',
    'sks' => 3,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S2202',
    'nama' => 'Praktikum Programming II',
    'sks' => 1,
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3111',
    'nama' => 'Elektronika II',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3112',
    'nama' => 'Praktikum Elektronika II',
    'sks' => 1,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3121',
    'nama' => 'Interaksi Manusia dan Mesin',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3122',
    'nama' => 'Praktikum Interaksi Manusia dan Mesin',
    'sks' => 1,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3101',
    'nama' => 'Arsitektur Sistem Komputer',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3102',
    'nama' => 'Praktikum Arsitektur Sistem Komputer',
    'sks' => 1,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3103',
    'nama' => 'Elektromagnetik',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3104',
    'nama' => 'Jaringan Komputer I',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3105',
    'nama' => 'Praktikum Jaringan Komputer I',
    'sks' => 1,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3106',
    'nama' => 'Sistem Instrumentasi',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '10S3109',
    'nama' => 'Kecerdasan Buatan',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KUS2001',
    'nama' => 'Bahasa Inggris III',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3201',
    'nama' => 'Pengolahan Sinyal Digital',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3202',
    'nama' => 'Praktikum Pengolahan Sinyal Digital',
    'sks' => 1,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3203',
    'nama' => 'Sistem Mikrokontroler',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3204',
    'nama' => 'Praktikum Sistem Mikrokontroler',
    'sks' => 1,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3205',
    'nama' => 'Kecerdasan Buatan',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3211',
    'nama' => 'Sistem Kendali',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3212',
    'nama' => 'Praktikum Sistem Kendali',
    'sks' => 1,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3221',
    'nama' => 'Jaringan Komputer II',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S3222',
    'nama' => 'Praktikum Jaringan Komputer II',
    'sks' => 1,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '12S3202',
    'nama' => 'Gudang Data dan Kecerdasan Bisnis',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KUS4101',
    'nama' => 'Pancasila dan Kewarganegaraan',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4091',
    'nama' => 'Tugas Akhir I',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4090',
    'nama' => 'Kerja Praktik',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4011',
    'nama' => 'Sistem Kendali Digital',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4021',
    'nama' => 'Jaringan Sensor Nirkabel',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4014',
    'nama' => 'Robotika',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4002',
    'nama' => 'Internet of Things Industri',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4003',
    'nama' => 'Sistem Tertanam',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4024',
    'nama' => 'Pengolahan Citra Digital',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4102',
    'nama' => 'Praktikum Sistem Tertanam',
    'sks' => 1,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4012',
    'nama' => 'Sistem kendali Multivariabel',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4013',
    'nama' => 'Mekatronika',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '21S4107',
    'nama' => 'Manajemen Strategi dan Perubahan',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '21S3101',
    'nama' => 'Ekonomika Teknik',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'TIS3001',
    'nama' => 'Keteknowiraan',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KUS3001',
    'nama' => 'Analisis Dampak Lingkungan',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KUS3002',
    'nama' => 'Agama dan Etika',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4092',
    'nama' => 'Tugas Akhir II',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4001',
    'nama' => 'Etika Profesional',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4022',
    'nama' => 'Jaringan Terdistribusi',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4023',
    'nama' => 'Keamanan Siber',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '11S4030',
    'nama' => 'UI/UX Design',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '21S3201',
    'nama' => 'Manajemen Proyek Rekayasa',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '21S4204',
    'nama' => 'Perancangan Produk Inovatif',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '14S4015',
    'nama' => 'Energi Terbarukan',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18001',
    'nama' => 'Study Independen Generasi GIGIH 2.0 by YABB & GoTo Query in SQL',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18002',
    'nama' => 'Study Independen Generasi GIGIH 2.0 by YABB & GoTo Analysis 101 and Intro to Data Viz with Tableu',
    'sks' => 5,
    'semester' => 8,
]);

// ... (kode sebelumnya)

// Semester VIII - Studi Independen dan Proyek
DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18003',
    'nama' => 'Study Independen Generasi GIGIH 2.0 by YABB & GoTo Capstone Project',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18004',
    'nama' => 'Study Independen Generasi GIGIH 2.0 by YABB & GoTo MVC concept, TDD, API creation up to Modelling',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18005',
    'nama' => 'Study Independen Generasi GIGIH 2.0 by YABB & GoTo OO, Data structure, Unit Test',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18006',
    'nama' => 'Studi Independen Become a Master of Golang Programme',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18007',
    'nama' => 'Studi Independen Bangkit Academy Dasar Pemograman Web',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18008',
    'nama' => 'Studi Independen Bangkit Academy Final Project',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18009',
    'nama' => 'Studi Independen Bangkit Academy Fundamental Cloud Computing',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18010',
    'nama' => 'Studi Independen Git Introduction & Basic Programming',
    'sks' => 1,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18011',
    'nama' => 'Studi Independen Google IT Automation',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18012',
    'nama' => 'Studi Independen Mathematics for Machine Learning',
    'sks' => 1,
    'semester' => 8,
]);

// ... (Tambahkan entri untuk mata kuliah dan proyek lainnya)

// Semester VIII - Studi Independen dan Proyek (lanjutan)
DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18013',
    'nama' => 'Studi Independen Tensor Flow Developer',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18014',
    'nama' => 'Studi Independen Machine Learning Capstone Project',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => '12S4005',
    'nama' => 'Hukum dan Etika Siber',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18039',
    'nama' => 'Study/ Proyek Independen 1',
    'sks' => 1,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18042',
    'nama' => 'Study/ Proyek Independen 4',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18043',
    'nama' => 'Study/ Proyek Independen 5',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18044',
    'nama' => 'Study/ Proyek Independen 6',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18040',
    'nama' => 'Study/Proyek Independen 2',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18041',
    'nama' => 'Study/Proyek Independen 3',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18015',
    'nama' => 'Membangun Desa-KKN 1',
    'sks' => 1,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18016',
    'nama' => 'Membangun Desa-KKN 2',
    'sks' => 2,
    'semester' => 8,
]);

// ... (Tambahkan entri untuk mata kuliah dan proyek lainnya)

// Semester VIII - KKN, Kewirausahaan Mahasiswa, dan Proyek Kemanusiaan
DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18017',
    'nama' => 'Membangun Desa-KKN 3',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18018',
    'nama' => 'Membangun Desa-KKN 4',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18019',
    'nama' => 'Membangun Desa-KKN 5',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18020',
    'nama' => 'Membangun Desa-KKN 6',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18021',
    'nama' => 'Kewirausahaan Mahasiswa 1',
    'sks' => 1,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18022',
    'nama' => 'Kewirausahaan Mahasiswa 2',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18023',
    'nama' => 'Kewirausahaan Mahasiswa 3',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18024',
    'nama' => 'Kewirausahaan Mahasiswa 4',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18025',
    'nama' => 'Kewirausahaan Mahasiswa 5',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18026',
    'nama' => 'Kewirausahaan Mahasiswa 6',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18027',
    'nama' => 'Proyek Kemanusiaan 1',
    'sks' => 1,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18028',
    'nama' => 'Proyek Kemanusiaan 2',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18029',
    'nama' => 'Proyek Kemanusiaan 3',
    'sks' => 3,
    'semester' => 8,
]);

// ... (Tambahkan entri untuk mata kuliah dan proyek lainnya)

// Semester VIII - Proyek Kemanusiaan, Asistensi Mengajar, Magang
DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18030',
    'nama' => 'Proyek Kemanusiaan 4',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18031',
    'nama' => 'Proyek Kemanusiaan 5',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18032',
    'nama' => 'Proyek Kemanusiaan 6',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18033',
    'nama' => 'Asistensi Mengajar di Unit Pendidikan 1',
    'sks' => 1,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18034',
    'nama' => 'Asistensi Mengajar di Unit Pendidikan 2',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18035',
    'nama' => 'Asistensi Mengajar di Unit Pendidikan 3',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18036',
    'nama' => 'Asistensi Mengajar di Unit Pendidikan 4',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18037',
    'nama' => 'Asistensi Mengajar di Unit Pendidikan 5',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18038',
    'nama' => 'Asistensi Mengajar di Unit Pendidikan 6',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18045',
    'nama' => 'Magang 1',
    'sks' => 1,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18046',
    'nama' => 'Magang 2',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18047',
    'nama' => 'Magang 3',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18048',
    'nama' => 'Magang 4',
    'sks' => 4,
    'semester' => 8,
]);

// ... (Tambahkan entri untuk mata kuliah dan kegiatan lainnya)

// Semester VIII - Magang dan Penelitian
DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18049',
    'nama' => 'Magang 5',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18050',
    'nama' => 'Magang 6',
    'sks' => 6,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18051',
    'nama' => 'Penelitian 1',
    'sks' => 1,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18052',
    'nama' => 'Penelitian 2',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18053',
    'nama' => 'Penelitian 3',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18054',
    'nama' => 'Penelitian 4',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18055',
    'nama' => 'Penelitian 5',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'els',
    'kode_mk' => 'KU18056',
    'nama' => 'Penelitian 6',
    'sks' => 6,
    'semester' => 8,
]);

// ... (Tambahkan entri untuk mata kuliah dan kegiatan lainnya)

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KUS1102',
    'nama' => 'Pembentukan Karakter Del',
    'sks' => '2',
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'MAS1101',
    'nama' => 'Matematika Dasar I',
    'sks' => '4',
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'FIS1101',
    'nama' => 'Fisika Dasar IA',
    'sks' => '4',
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '30S1101',
    'nama' => '	Pengantar Teknik Bioproses',
    'sks' => '2',
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'TIS1101',
    'nama' => 'Inovasi Digital',
    'sks' => '2',
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KUS1101',
    'nama' => 'Bahasa Inggris I',
    'sks' => '2',
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KIS1101',
    'nama' => '	Kimia Dasar A',
    'sks' => '4',
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'MAS1201',
    'nama' => 'Matematika Dasar II',
    'sks' => '4',
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'FIS1201',
    'nama' => 'Fisika Dasar IIA',
    'sks' => '4',
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KIS1101',
    'nama' => '	Kimia Dasar A',
    'sks' => '4',
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KUS1201',
    'nama' => 'Bahasa Inggris II',
    'sks' => '2',
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KUS1001',
    'nama' => 'Penulisan Karya Ilmiah',
    'sks' => '2',
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KUS1202',
    'nama' => 'Pengantar Rekayasa dan Desain',
    'sks' => '2',
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S1201',
    'nama' => 'Kimia Organik',
    'sks' => '3',
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KUS3002',
    'nama' => '	Agama dan Etika',
    'sks' => '2',
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2101',
    'nama' => 'Analisis Matematika Teknik Bioproses',
    'sks' => '3',
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2106',
    'nama' => '	Mikrobiologi Umum',
    'sks' => '2',
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2107',
    'nama' => 'Praktikum Mikrobiologi Umum',
    'sks' => '1',
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2104',
    'nama' => 'Kimia Fisik',
    'sks' => '3',
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2105',
    'nama' => 'Praktikum Kimia Fisik',
    'sks' => '3',
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2102',
    'nama' => '	Biokimia',
    'sks' => '3',
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2103',
    'nama' => '	Praktikum Biokimia',
    'sks' => '1',
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S210331S2108',
    'nama' => 'Neraca massa dan Energi',
    'sks' => '3',
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S1201',
    'nama' => 'Kimia Organik',
    'sks' => '3',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S1202',
    'nama' => 'Praktikum Kimia Organik',
    'sks' => '1',
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2203',
    'nama' => 'Genetika & Biologi Molekuler',
    'sks' => '2',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2204',
    'nama' => 'Praktikum Genetika & Biologi Molekuler',
    'sks' => '1',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S1202',
    'nama' => 'Praktikum Kimia Organik',
    'sks' => '1',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2201',
    'nama' => 'Analisis Instrumental',
    'sks' => '2',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2202',
    'nama' => '	Praktikum Analisis Instrumental',
    'sks' => '1',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2206',
    'nama' => 'Pengantar Bahan Lunak',
    'sks' => '3',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2207',
    'nama' => 'Pengantar Komputasi Bioproses',
    'sks' => '3',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2208',
    'nama' => 'Termodinamika Kimiawi',
    'sks' => '3',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S2205',
    'nama' => 'Operasi Fisik Pendukung I',
    'sks' => '3',
    'semester' => 4,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'MAS2001',
    'nama' => 'Probabilitas dan Statistika',
    'sks' => '3',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3104',
    'nama' => 'Fenomena Transpor',
    'sks' => '3',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3101',
    'nama' => 'Fisiologi',
    'sks' => '3',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3102',
    'nama' => '	Kinetika dan Katalisa',
    'sks' => '3',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3103',
    'nama' => 'Operasi Fisik Pendukung II',
    'sks' => '3',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3105',
    'nama' => 'Utilitas & Pengolahan Limbah',
    'sks' => '3',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3109',
    'nama' => 'Konstruksi Sosial Teknologi',
    'sks' => '2',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3106',
    'nama' => '	Falsafah Ilmu',
    'sks' => '2',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3107',
    'nama' => '	Hukum dan Peraturan Perundangan',
    'sks' => '3',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3108',
    'nama' => '	Engineering Fundamentals I',
    'sks' => '2',
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3205',
    'nama' => 'Teknologi Enzim',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3202',
    'nama' => 'Pengendalian & Instrumentasi Proses',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3203',
    'nama' => 'Praktikum Pengendalian & Instrumentasi Proses',
    'sks' => 1,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3204',
    'nama' => 'Proses-proses Pemisahan',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3206',
    'nama' => 'Teknik Reaktor Bioproses',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3207',
    'nama' => 'Kerja Praktik',
    'sks' => 2,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S3201',
    'nama' => 'Laboratorium Teknik Bioproses',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KUS2001',
    'nama' => 'Bahasa Inggris III',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4101',
    'nama' => 'Analisis Keekonomian Proyek Bioproses',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4103',
    'nama' => 'Sistem Biologi',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4102',
    'nama' => 'Mikrobiologi Industri',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'KUS4101',
    'nama' => 'Pancasila dan Kewarganegaraan',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4001',
    'nama' => 'Tugas Akhir I (Penelitian)',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4105',
    'nama' => 'Aplikasi dan Industri Teknik Bioproses',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4007',
    'nama' => 'Engineering Fundamentals II',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4106',
    'nama' => 'Kapita Selekta',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4107',
    'nama' => 'Optimasi Proses',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4201',
    'nama' => 'Etika Keprofesian',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4202',
    'nama' => 'Perancangan Pabrik',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4002',
    'nama' => 'Tugas Akhir II (Penelitian)',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4201',
    'nama' => 'Etika Keprofesian',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4202',
    'nama' => 'Perancangan Pabrik',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '31S4002',
    'nama' => 'Tugas Akhir II (Penelitian)',
    'sks' => 4,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => 'TIS3001',
    'nama' => 'Keteknowiraan',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '21S3201',
    'nama' => 'Manajemen Proyek Rekayasa',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '12S4081',
    'nama' => 'Pengenalan Basis Data dan Sistem Informasi',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'bps',
    'kode_mk' => '11S4030',
    'nama' => 'UI/UX Design',
    'sks' => 3,
    'semester' => 8,
]);


//mr
// Semester I
DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS1102',
    'nama' => 'Pembentukan Karakter Del',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'MAS1101',
    'nama' => 'Matematika Dasar I',
    'sks' => 4,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'TIS1101',
    'nama' => 'Inovasi Digital',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS1101',
    'nama' => 'Bahasa Inggris I',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'FIS1102',
    'nama' => 'Fisika Dasar IB',
    'sks' => 3,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S1101',
    'nama' => 'Pengantar Manajemen Rekayasa',
    'sks' => 2,
    'semester' => 1,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S1102',
    'nama' => 'Berpikir Sistem',
    'sks' => 3,
    'semester' => 1,
]);

// Semester II

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'MAS1201',
    'nama' => 'Matematika Dasar II',
    'sks' => 4,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS1201',
    'nama' => 'Bahasa Inggris II',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS1001',
    'nama' => 'Penulisan Karya Ilmiah',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS1202',
    'nama' => 'Pengantar Rekayasa dan Desain',
    'sks' => 2,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'FIS1202',
    'nama' => 'Fisika Dasar IIB',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KIS1001',
    'nama' => 'Kimia Dasar B',
    'sks' => 3,
    'semester' => 2,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S1201',
    'nama' => 'Pengantar Ilmu Ekonomi',
    'sks' => 2,
    'semester' => 2,
]);

// Semester III
DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'MAS2001',
    'nama' => 'Probabilitas dan Statistika',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS2001',
    'nama' => 'Bahasa Inggris III',
    'sks' => 2,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S2101',
    'nama' => 'Termodinamika Teknik',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '11S2180',
    'nama' => 'Pengantar Pemrograman',
    'sks' => 2,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS4101',
    'nama' => 'Pancasila dan Kewarganegaraan',
    'sks' => 2,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S2102',
    'nama' => 'Visualisasi dan Gambar Teknik',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S2103',
    'nama' => 'Perencanaan dan Pengendalian Produksi',
    'sks' => 3,
    'semester' => 3,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S2104',
    'nama' => 'Praktikum Sistem Produksi 1',
    'sks' => 1,
    'semester' => 3,
]);

 // Semester IV

            DB::table('courses')->insert([
                'kode_prodi' => 'mrs',
                'kode_mk' => '21S2201',
                'nama' => 'Matematika Lanjut',
                'sks' => 3,
                'semester' => 4,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'mrs',
                'kode_mk' => '21S2202',
                'nama' => 'Statistika Inferensi',
                'sks' => 3,
                'semester' => 4,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'mrs',
                'kode_mk' => '21S2203',
                'nama' => 'Penelitian Operasional 1',
                'sks' => 3,
                'semester' => 4,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'mrs',
                'kode_mk' => '21S2204',
                'nama' => 'Ekologi Industri',
                'sks' => 3,
                'semester' => 4,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'mrs',
                'kode_mk' => '21S2205',
                'nama' => 'Sistem dan Teknik Keenergian',
                'sks' => 3,
                'semester' => 4,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'mrs',
                'kode_mk' => '21S2206',
                'nama' => 'Praktikum Sistem Produksi 2',
                'sks' => 1,
                'semester' => 4,
            ]);

            DB::table('courses')->insert([
                'kode_prodi' => 'mrs',
                'kode_mk' => '21S2207',
                'nama' => 'Perancangan dan Pengembangan Produk',
                'sks' => 3,
                'semester' => 4,
            ]);

// Semester V
DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3101',
    'nama' => 'Ekonomika Teknik',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3102',
    'nama' => 'Penelitian Operasional 2',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3103',
    'nama' => 'Perancangan Model Bisnis',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3104',
    'nama' => 'Riset Pasar dan Pemasaran',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3105',
    'nama' => 'Perancangan Organisasi dan Sumber Daya Manusia',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'TIS3001',
    'nama' => 'Keteknowiraan',
    'sks' => 3,
    'semester' => 5,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS3001',
    'nama' => 'Analisis Dampak Lingkungan',
    'sks' => 2,
    'semester' => 5,
]);

// Semester VI
DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3201',
    'nama' => 'Manajemen Proyek Rekayasa',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '12S4081',
    'nama' => 'Pengenalan Basis Data dan Sistem Informasi',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3202',
    'nama' => 'Rekayasa Logistik',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3203',
    'nama' => 'Rekayasa Mutu',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3204',
    'nama' => 'Akuntansi Biaya',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3205',
    'nama' => 'Metodologi Penelitian',
    'sks' => 3,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S3206',
    'nama' => 'Praktikum Analisis Data',
    'sks' => 1,
    'semester' => 6,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS3063',
    'nama' => 'Magang 3',
    'sks' => 3,
    'semester' => 6,
]);

// Semester VII

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4090',
    'nama' => 'Desain Proyek Rekayasa (Capstone)',
    'sks' => 5,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4091',
    'nama' => 'Kerja Praktek',
    'sks' => 2,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4101',
    'nama' => 'Simulasi Sistem',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4102',
    'nama' => 'Pengambilan Keputusan',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4103',
    'nama' => 'Perancangan Six Sigma',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4104',
    'nama' => 'Asesmen Teknologi',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4105',
    'nama' => 'Rekayasa Keandalan',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4106',
    'nama' => 'Rekayasa Energi Baru dan Terbarukan',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4107',
    'nama' => 'Manajemen Strategi dan Perubahan',
    'sks' => 3,
    'semester' => 7,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4108',
    'nama' => 'Analisis Ekonomi Energi',
    'sks' => 3,
    'semester' => 7,
]);


// Semester VIII
DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4092',
    'nama' => 'Tugas Akhir',
    'sks' => 5,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4201',
    'nama' => 'Etika Profesional',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => 'KUS3002',
    'nama' => 'Agama dan Etika',
    'sks' => 2,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4109',
    'nama' => 'Perancangan Logistik Berbasis Geospasial',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4202',
    'nama' => 'Perancangan K3',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4203',
    'nama' => 'Inovasi Model Bisnis',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4204',
    'nama' => 'Perancangan Produk Inovatif',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4205',
    'nama' => 'Teknologi Keuangan',
    'sks' => 3,
    'semester' => 8,
]);

DB::table('courses')->insert([
    'kode_prodi' => 'mrs',
    'kode_mk' => '21S4206',
    'nama' => 'Proyek Penelitian Pasar',
    'sks' => 3,
    'semester' => 8,
]);


}  

}
