<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'kode_prodi' => 'ifs',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Dr. Arlinta Christy Barus, S.T., M.InfoTech',
            'nidn' => '117027901',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 -  University of Wollongong, Australia',
            'gambar' => 'acb.jpeg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'ifs',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Arie Satia Dharma, S.T, M.Kom',
            'nidn' => '927028002',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - Universitas Sumatera Utara',
            'gambar' => '_0007_asd.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'ifs',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Herimanto, S.Kom., M.Kom',
            'nidn' => '124069301',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Sumatera Utara',
            'gambar' => '_0001_hto.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'ifs',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Iustisia N. Simbolon, S.Kom., M.T.',
            'nidn' => '114129002',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => '_0006_ius.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'ifs',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Abdullah Ubaid, S.Kom.',
            'nidn' => '114129002',
            'jabatan' => 'Teaching Assistant',
            'pendidikan' => 'S1 - Institut Teknologi Del',
            'gambar' => '_0002_aud.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'ifs',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Tahan H.J. Sihombing, M.AppLing(TESOL)',
            'nidn' => '114129002',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - University of Queensland',
            'gambar' => '_0000_thj.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'ifs',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Nenni Mona Aruan, S.Pd, M.T.',
            'nidn' => '114129002',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => '_0005_nma.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'ifs',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Aprialdy Sembiring, S.Kom.',
            'nidn' => '114129002',
            'jabatan' => 'Teaching Assistant',
            'pendidikan' => 'S1 - Institut Teknologi Del',
            'gambar' => '_0003_ags.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Albert Sagala, S.T, M.T',
            'nidn' => '104027801',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'I Gde Eka Dirgayussa, S.Pd,M.Si',
            'nidn' => '103058901',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Indra Hartarto Tambunan, Ph.D.',
            'nidn' => '128048403',
            'jabatan' => 'Dekan',
            'pendidikan' => 'S3 - Konkuk University',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Guntur Petrus Boy Knight, S.T.,M.T.',
            'nidn' => '126078702',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'iss',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Mario Elyezer Subekti Simaremare, S.Kom., M.Sc.',
            'nidn' => '128058805',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - University of Amsterdam',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'iss',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Samuel Indra Gunawan Situmeang, S.TI., M.Sc.',
            'nidn' => '110029201',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - NATIONAL CHUNG CHENG UNIVERSITY',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'iss',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Parmonangan Rotua Togatorop, S.Kom., M.T.I',
            'nidn' => '130058501',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Indonesia',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'iss',
            'kode_fakultas' => 1, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Junita Amalia, S.Pd., M.Si',
            'nidn' => '117069202',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - ITS Surabaya',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if3',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Monalisa Pasaribu, SS., M.Ed',
            'nidn' => '113118602',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 -Universitas of Wollongong',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if3',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Monalisa Pasaribu, SS., M.Ed',
            'nidn' => '113118602',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 -Universitas of Wollongong',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if3',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Goklas Henry Agus Panjaitan, S.Tr.Kom',
            'nidn' => '117089103',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'ce3',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Eka Stephani Sinambela, SST., M.Sc',
            'nidn' => '117078706',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - VU University of Amsterdam',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'ce3',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Istas Manalu, S.Si., M.Sc',
            'nidn' => '104088902',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Chang Gung University ',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if4',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Ardiles Sinaga, S.T., M.T.',
            'nidn' => '420098501',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - Universitas Telkom',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if4',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Riyanthi Angrainy Sianturi, S.Sos, M.Ds',
            'nidn' => '121058503',
            'jabatan' => 'Dekan',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'bps',
            'kode_fakultas' => 3, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Dr. Merry Meryam Martgrita, S.Si., M.Si.',
            'nidn' => '112037001',
            'jabatan' => 'Dekan',
            'pendidikan' => 'S3 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'bps',
            'kode_fakultas' => 3, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Ellyas Alga Nainggolan S.TP.,M.Sc',
            'nidn' => '110079001',
            'jabatan' => 'Dekan',
            'pendidikan' => 'S2 - Universitas Gadjah Mada',
            'gambar' => 'fv-carousel.jpg',
            
        ]);


        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Samuel Hasudungan Tampubolon, S.T., MSc.',
            'nidn' => '115019701',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Gadjah Mada',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Dr. Fitriani Tupa Ronauli Silalahi, S.Si, M.Si',
            'nidn' => '112039001',
            'jabatan' => 'Dekan',
            'pendidikan' => 'S3 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Wesly Mailander Siagian, S.Pt., M.M.',
            'nidn' => '116059002',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - Institut Pertanian Bogor',
            'gambar' => 'fv-carousel.jpg',
            
        ]);


        DB::table('employees')->insert([
            'kode_prodi' => 'tms',
            'kode_fakultas' => 2, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Santi Febri Arianti, S.Si, M.Sc',
            'nidn' => '104028502',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - Institut Pertanian Bogor',
            'gambar' => 'fv-carousel.jpg',
            
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'tms',
            'kode_fakultas' => 2, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Aga Nugraha ST., MT.',
            'nidn' => '-',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Sumatera Utara',
            'gambar' => 'fv-carousel.jpg',
            
        ]);


        DB::table('employees')->insert([
            'kode_prodi' => 'bps',
            'kode_fakultas' => 3, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Dr. Merry Meryam Martgrita, S.Si., M.Si.',
            'nidn' => '112037001',
            'jabatan' => 'Dekan',
            'pendidikan' => 'S3 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'bps',
            'kode_fakultas' => 3, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Meiyer Marthen Kinda, S.T.M.T',
            'nidn' => '0128058902',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'bps',
            'kode_fakultas' => 3, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Ellyas Alga Nainggolan S.TP.,M.Sc',
            'nidn' => '110079001',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Gadjah Mada',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'bps',
            'kode_fakultas' => 3, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Adrianto Prihartantyo, S.Si., M.T.',
            'nidn' => '0109108702',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Institut Teknologi Sepuluh Nopember',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'bps',
            'kode_fakultas' => 3, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Yoli Agnesia, S.Pd., M.Si.',
            'nidn' => '0125089302',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'bps',
            'kode_fakultas' => 3, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Dedy Anwar, ST., MT',
            'nidn' => '0108089002',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Sumatera Utara',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if4',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Riyanthi Angrainy Sianturi, S.Sos, M.Ds',
            'nidn' => '121058503',
            'jabatan' => 'Dekan',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if4',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Ardiles Sinaga, S.T., M.T.',
            'nidn' => '420098501',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - Universitas Telkom',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if4',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Regina Ayunita Tarigan, S.Si., M.Sc',
            'nidn' => '0125109101',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Telkom',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if4',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Oppir Hutapea, S.Tr.Kom, M.Kom',
            'nidn' => '',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Bina Nusantara',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if4',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Ana Muliyana, M.Pd.',
            'nidn' => '',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Negeri Yogyakarta',
            'gambar' => 'fv-carousel.jpg',

        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'if4',
            'kode_fakultas' => 4, // Ganti dengan kode fakultas yang sesuai
            'nama' => 'Dr. Batara Parada Siahaan, S.Kom., M.S.M., M.I.M',
            'nidn' => '0122069202',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S3 - Institut Teknologi Bandung',
            'gambar' => 'fv-carousel.jpg',

        ]);


    }
}