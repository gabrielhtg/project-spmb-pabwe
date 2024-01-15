<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_persyaratan_prodi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert([
          [
            'program_studi'=>'Teknik Elektro',
            'deskripsi_persyaratan'=>'
            <ul>
              <li>Tidak Buta Warna, dibuktikan dengan melampirkan Surat Keterangan Tidak Buta Warna dari Dokter Spesialis Mata</li>
              <li>Siswa berasal dari:</li>
              <ul>
                <li>SMA jurusan IPA/MIA atau</li>
                <li>SMK Teknik (Elektro, Elektronika, Listrik, Teknik Komputer dan Jaringan, Teknik Komputer dan Informatika, Teknik Telekomunikasi, Teknik Otomotif, Teknik Elektronika, Teknik Pesawat Udara, Teknik Industri)</li>
              </ul>
            </ul>
            ',
            'cover'=>'assets/img/FITE.jpg'
          ],
          [
            'program_studi'=>'Teknik Biproses',
            'deskripsi_persyaratan'=>'
            <ul>
              <li>Tidak Buta Warna, dibuktikan dengan melampirkan Surat Keterangan Tidak Buta Warna dari Dokter Spesialis Mata</li>
              <li>Siswa berasal dari:</li>
              <ul>
                <li>SMA jurusan IPA/MIA atau</li>
                <li>SMK (Agribisnis Pengolahan Hasil Pertanian, Agribisnis Pengolahan Hasil Pertanian dan Perikanan, Mekanisasi Pertanian, Teknik Kimia).</li>
              </ul>
            </ul>
            ',
            'cover'=>'assets/img/fb.jpg'
          ],
          [
            'program_studi'=>'Manajemen Rekayasa',
            'deskripsi_persyaratan'=>'
            <ul>
              <li>Siswa berasal dari:</li>
              <ul>
                <li>SMA jurusan IPA/MIA atau</li>
                <li>dari SMK (Teknik Pertanian, Teknik Mesin, Teknik Industri, Teknik Furnitur dan Teknik Tekstil).</li>
                <li>SMA Jurusan IPS khusus dari SMA Unggul Del
              </ul>
            </ul>
            ',
            'cover'=>'assets/img/fti.jpg'
          ],
          [
            'program_studi'=>'Teknik Metalurgi',
            'deskripsi_persyaratan'=>'
            <ul>
              <li>Tidak Buta Warna, dibuktikan dengan melampirkan Surat Keterangan Tidak Buta Warna dari Dokter Spesialis Mata</li>
              <li>Siswa berasal dari SMA jurusan IPA/MIA</li>
            </ul>
            ',
            'cover'=>'assets/img/fti.jpg'
          ],
          [
            'program_studi'=>'S1 Informatika',
            'deskripsi_persyaratan'=>'
            <ul>
              <li>Siswa berasal dari:</li>
              <ul>
                <li>SMA jurusan IPA/MIA atau</li>
                <li>SMK Teknik (Informatika, Komputer, Jaringan, Rekayasa Perangkat Lunak).</li>
              </ul>
            </ul>
            ',
            'cover'=>'assets/img/FITE.jpg'
          ],
          [
            'program_studi'=>'S1 Sistem Informasi',
            'deskripsi_persyaratan'=>'
            <ul>
              <li>Siswa berasal dari:</li>
              <ul>
                <li>SMA jurusan IPA/MIA atau</li>
                <li>SMK Teknik (Informatika, Komputer, Jaringan, Rekayasa Perangkat Lunak).</li>
                <li>SMA Jurusan IPS khusus dari SMA Unggul Del
              </ul>
            </ul>
            ',
            'cover'=>'assets/img/FITE.jpg'
          ],
          [
            'program_studi'=>'Sarjana Terapan Teknologi Rekayasa Perangkat Lunak',
            'deskripsi_persyaratan'=>'
            <ul>
              <li>Siswa berasal dari:</li>
              <ul>
                <li>SMA jurusan IPA/IPS/MIA atau</li>
                <li>SMK Teknik (Informatika, Komputer, Jaringan, Rekayasa Perangkat Lunak).</li>
              </ul>
            </ul>
            ',
            'cover'=>'assets/img/vokasi.jpg'
          ],
          [
            'program_studi'=>'D3 Teknologi Komputer',
            'deskripsi_persyaratan'=>'
            <ul>
              <li>Siswa berasal dari:</li>
              <ul>
                <li>SMA jurusan IPA/IPS/MIA atau</li>
                <li>SMK Teknik (Informatika, Komputer, Jaringan, Rekayasa Perangkat Lunak).</li>
              </ul>
            </ul>
            ',
            'cover'=>'assets/img/vokasi.jpg'
          ],
          [
            'program_studi'=>'D3 Teknologi Informasi',
            'deskripsi_persyaratan'=>'
            <ul>
              <li>Siswa berasal dari:</li>
              <ul>
                <li>SMA jurusan IPA/IPS/MIA atau</li>
                <li>SMK Teknik (Informatika, Komputer, Jaringan, Rekayasa Perangkat Lunak).</li>
              </ul>
            </ul>
            ',
            'cover'=>'assets/img/vokasi.jpg'
          ],
        ]);
    }
}
