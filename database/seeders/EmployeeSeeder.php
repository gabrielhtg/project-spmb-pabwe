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
            'gambar' => 'acb.jpg',
            
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

        // S1 MANAJEMEN REKAYASA

        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2,
            'nama' => 'Niko Saripson P. Simamora, S.T.,MAB',
            'nidn' => '0116028903',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => '_0007_NSS.jpg',
        ]);

        
        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2,
            'nama' => 'Iswanti Sihaloho, S.Si., M.Si',
            'nidn' => '0123089302',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Institut Teknologi Bandung',
            'gambar' => '_0006_ISW.jpg',
        ]);

        
        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2,
            'nama' => 'Hadi Sutanto Saragi, S.T, M.Eng',
            'nidn' => '0109099101',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Gadjah Mada',
            'gambar' => '_0005_HSS.jpg',
        ]);

        
        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2,
            'nama' => 'Mariana Simanjuntak, S.S., M.Sc',
            'nidn' => '0120077401',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Universitas Gadjah Mada',
            'gambar' => '_0003_ANA.jpg',
        ]);

        
        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2,
            'nama' => 'Josua Boyke William Jawak, ST., M.Ds',
            'nidn' => '0115069701',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Telkom University',
            'gambar' => '_0002_JBJ.jpg',
        ]);

        
        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2,
            'nama' => 'Samuel Hasudungan Tampubolon, S.T., MSc.',
            'nidn' => '0115019701',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - University of Amsterdam',
            'gambar' => '_0001_SHT.jpg',
        ]);

        
        DB::table('employees')->insert([
            'kode_prodi' => 'mrs',
            'kode_fakultas' => 2,
            'nama' => 'Ivo Sibarani, S.T.',
            'nidn' => '-',
            'jabatan' => 'Teaching Assistant',
            'pendidikan' => 'S1 - Institut Teknologi Del',
            'gambar' => '_0000_IVO.jpg',
        ]);
        
        // S1 TEKNIK ELEKTRO

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'nama' => 'Guntur Petrus Boy Knight, S.T.,M.T',
            'nidn' => '0126078702',
            'jabatan' => 'Kaprodi',
            'pendidikan' => 'S2 - Insitut Teknologi Bandung',
            'gambar' => '_0000_GPS.jpg',
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'nama' => 'I Gde Eka Dirgayussa, S.Pd,M.Si',
            'nidn' => '0103058901',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Insitut Teknologi Bandung',
            'gambar' => '_0001_GDE.jpg',
        ]);

        
        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'nama' => 'Asido Saragih, S.Pd., M.Sc.',
            'nidn' => '0624109301',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - National Chung Cheng University',
            'gambar' => '_0002_ASH.jpg',
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'nama' => 'Febrian Cornellius Sidabutar, S.T.',
            'nidn' => '-',
            'jabatan' => 'Teaching Assistant',
            'pendidikan' => 'S1 - Institut Teknologi Del',
            'gambar' => '_0003_FCS.jpg',
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'nama' => 'Philippians Manurung, S.T., M.T.',
            'nidn' => '-',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2- Institut Teknologi Del',
            'gambar' => '_0004_PHI.jpg',
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'nama' => 'Alfriska Oktarina Silalahi, S.Pd., M.Si.',
            'nidn' => '0107109002',
            'jabatan' => 'Dosen',
            'pendidikan' => 'S2 - Insitut Teknologi Bandung',
            'gambar' => '_0005_AFS.jpg',
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'nama' => 'Indra Hartarto Tambunan, Ph.D.',
            'nidn' => '0128048403',
            'jabatan' => 'Dekan',
            'pendidikan' => 'S3 - Konkuk University',
            'gambar' => '_0006_IHT.jpg',
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'nama' => 'Basry Sihotang, S.T.',
            'nidn' => '0128048403',
            'jabatan' => 'Teaching Assistant',
            'pendidikan' => 'S1 - Institut Teknologi Del',
            'gambar' => '_0007_BHT.jpg',
        ]);

        DB::table('employees')->insert([
            'kode_prodi' => 'els',
            'kode_fakultas' => 1,
            'nama' => 'Kevin Siahaan, S.T.',
            'nidn' => '0128048403',
            'jabatan' => 'Teaching Assistant',
            'pendidikan' => 'S1 - Institut Teknologi Del',
            'gambar' => '_0008_KVN.jpg',
        ]);


    }
}