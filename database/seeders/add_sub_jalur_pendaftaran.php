<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_sub_jalur_pendaftaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jalur_pendaftaran')->insert([
            [
                'jalurPendaftaran'=>'PMDK',
                'desk_pers_umum'=>'<p><strong>PMDK (Penelusuran Minat Bakat dan Kemampuan) </strong> adalah salah satu jalur penerimaan mahasiswa baru yang diselenggarakan oleh Institut Teknologi Del (IT Del), melalui penelusuran minat, bakat, dan kemampuan calon mahasiswa. Pendaftaran PMDK dilakukan di sekolah masing-masing, melalui perwakilan/petugas yang ditetapkan oleh IT Del khususnya sekolah yang berada di kawasan Danau Toba.</p>

                <p>Seleksi PMDK mencakup beberapa komponen penilaian yaitu:</p>
                <ol>
                <li>Nilai Rapor</li>
                <li>Prestasi Akademik</li>
                <li>Surat Rekomendasi</li>
                <li>Prestasi Non Akademik</li>
                </ol>

                <p>Persyaratan yang harus dipenuhi oleh pendaftar program PMDK adalah sebagai berikut:</p>
                
                <strong>A. Persyaratan Umum</strong></br>
                
                <ol>
                    <li>Mengisi Formulir Pendaftaran PMDK 2024/2025 secara online pada tautan berikut :<a href = "https://spmbapp.del.ac.id/index.php" style="color:blue;"> https://spmbapp.del.ac.id/index.php</a></li>
                    <li>Melampirkan Surat Rekomendasi dari Kepala Sekolah atau yang mewakili.</li>
                    <li>Melampirkan scan rapor kelas X s.d XII sampai semester V.</li>
                    <li>Melampirkan sertifikat/piagam penghargaan akademis dan non akademis (jika ada).</li>
                    <li>Siswa berasal dari jurusan yang <strong>tidak termasuk</strong> dalam kelompok Ilmu sosial, Budaya atau Bahasa.</li>
                    <li>Usia <strong>maksimum 21 tahun</strong> per 31 Agustus 2024;</li>
                    <li>Memiliki Nilai Matematika, dan Fisika minimal 80.00, serta Bahasa Inggris minimal 70.00, pada setiap semester, <strong>ATAU</strong> ranking <strong><=5</strong> setiap semester, kecuali untuk jenjang DIV dan DIII, ranking <= 10.</li>
                    <li>Dapat memilih <strong>maksimal 3 pilihan program studi</strong>,  dari 9 program studi yang ada di IT Del yakni :
                    <ol type = "a">
                        <li><strong>Fakultas Vokasi [FV], Program Studi:</strong>
                        <ol>
                            <li>Teknologi Informasi (D3)</li>
                            <li>Teknologi Komputer (D3)</li>
                            <li>Teknologi Rekayasa Perangkat Lunak (D4)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Informatika & Teknik Elektro [FITE], Program Studi:</strong>
                        <ol>
                            <li>Informatika (S1)</li>
                            <li>Teknik Elektro (S1)</li>
                            <li>Sistem Informasi (S1)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Teknologi Industri [FTI], Program Studi:</strong>
                        <ol>
                            <li>Manajemen Rekayasa (S1)</li>
                            <li>Teknik Metalurgi (S1)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Bioteknologi [FB], Program Studi:</strong>
                        <ol>
                            <li>Teknik Bioproses (S1)</li>
                        </ol>
                        </li>
                    </ol>
                    </li>
                </ol>',
                'created_by'=>'admin',
                'updated_by'=>'admin',
            ],
            [
                'jalurPendaftaran'=>'USM',
                'desk_pers_umum'=>'<p><strong>USM (Ujian Saring Masuk)</strong> adalah salah satu jalur penerimaan mahasiswa baru yang diselenggarakan oleh Institut Teknologi Del (IT Del), melalui tes akademik dan psikotes. Pendaftaran sebagai peserta Seleksi Program USM IT Del dilakukan secara daring dengan membuka laman <a href = "https://spmbapp.del.ac.id/index.php" style="color:blue;"> https://spmbapp.del.ac.id/index.php</a>.</p>

                <p>Persyaratan yang harus dipenuhi oleh pendaftar program PMDK adalah sebagai berikut:</p>
                
                <strong>A. Persyaratan Umum</strong></br>
                
                <ol>
                    <li>Memiliki minat yang tinggi untuk melanjutkan studi di IT Del dan akan mendaftarkan diri sebagai mahasiswa IT Del apabila dinyatakan lulus seleksi untuk program USM;</li>
                    <li>Siswa berasal dari jurusan yang <strong>tidak termasuk</strong> dalam kelompok Ilmu sosial, Budaya atau Bahasa.</li>
                    <li>Usia <strong>maksimum 21 tahun</strong> per 31 Agustus 2024;</li>
                    <li>Mengikuti tes akademik daring  berupa<strong>Matematika, Bahasa Inggris, dan Tes Potensi Akademik</strong>;</li>
                    <li>Dapat memilih <strong>maksimal 3 pilihan program studi</strong>,  dari 9 program studi yang ada di IT Del yakni :
                    <ol type = "a">
                        <li><strong>Fakultas Vokasi [FV], Program Studi:</strong>
                        <ol>
                            <li>Teknologi Informasi (D3)</li>
                            <li>Teknologi Komputer (D3)</li>
                            <li>Teknologi Rekayasa Perangkat Lunak (D4)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Informatika & Teknik Elektro [FITE], Program Studi:</strong>
                        <ol>
                            <li>Informatika (S1)</li>
                            <li>Teknik Elektro (S1)</li>
                            <li>Sistem Informasi (S1)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Teknologi Industri [FTI], Program Studi:</strong>
                        <ol>
                            <li>Manajemen Rekayasa (S1)</li>
                            <li>Teknik Metalurgi (S1)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Bioteknologi [FB], Program Studi:</strong>
                        <ol>
                            <li>Teknik Bioproses (S1)</li>
                        </ol>
                        </li>
                    </ol>
                    </li>
                </ol>',
                'created_by'=>'admin',
                'updated_by'=>'admin',
            ],
            [
                'jalurPendaftaran'=>'UTBK',
                'desk_pers_umum'=>'<p><strong>Sertifikat UTBK</strong> adalah salah satu jalur penerimaan mahasiswa baru yang diselenggarakan oleh Institut Teknologi Del (IT Del), melalui sertifikat UTBK yang diselenggarakan oleh Lembaga Tes Masuk Perguruan Tinggi Negeri (LTMPT). Pendaftaran sebagai peserta Seleksi Program Sertifikat UTBK IT Del dilakukan secara daring dengan membuka laman <a href = "https://spmbapp.del.ac.id/index.php" style="color:blue;"> https://spmbapp.del.ac.id/index.php</a> dan mengisi/melengkapi formulir isian yang tersedia sesuai dengan petunjuk.</p>

                <p>Persyaratan yang harus dipenuhi oleh pendaftar program UTBK adalah sebagai berikut:</p>
                
                <strong>Persyaratan Umum</strong></br>
                
                <ol>
                    <li>Memiliki minat yang tinggi untuk melanjutkan studi di IT Del dan akan mendaftarkan diri sebagai mahasiswa IT Del apabila dinyatakan lulus seleksi untuk program USM;</li>
                    <li>Siswa berasal dari jurusan yang <strong>tidak termasuk</strong> dalam kelompok Ilmu sosial, Budaya atau Bahasa.</li>
                    <li>Lulusan SMA atau SMK Teknik pada semua jurusan dengan tahun ijazah 2024;
                    </li>
                    <li>Usia <strong>maksimum 21 tahun</strong> per 31 Agustus 2024;</li>
                    <li>Mengikuti tes <strong>psikotes</strong>;</li>
                    <li>Dapat memilih <strong>maksimal 3 pilihan program studi</strong>,  dari 9 program studi yang ada di IT Del yakni :
                    <ol type = "a">
                        <li><strong>Fakultas Vokasi [FV], Program Studi:</strong>
                        <ol>
                            <li>Teknologi Informasi (D3)</li>
                            <li>Teknologi Komputer (D3)</li>
                            <li>Teknologi Rekayasa Perangkat Lunak (D4)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Informatika & Teknik Elektro [FITE], Program Studi:</strong>
                        <ol>
                            <li>Informatika (S1)</li>
                            <li>Teknik Elektro (S1)</li>
                            <li>Sistem Informasi (S1)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Teknologi Industri [FTI], Program Studi:</strong>
                        <ol>
                            <li>Manajemen Rekayasa (S1)</li>
                            <li>Teknik Metalurgi (S1)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Bioteknologi [FB], Program Studi:</strong>
                        <ol>
                            <li>Teknik Bioproses (S1)</li>
                        </ol>
                        </li>
                    </ol>
                    </li>
                </ol>',
                'created_by'=>'admin',
                'updated_by'=>'admin',
            ],
            [
                'jalurPendaftaran'=>'JPS',
                'desk_pers_umum'=>'<p><strong>PMDK (Jalur Prestasi Siswa) </strong> adalah salah satu jalur penerimaan mahasiswa baru yang diselenggarakan oleh Institut Teknologi Del (IT Del), melalui penelusuran minat, bakat, dan kemampuan calon mahasiswa. Pendaftaran JPS dilakukan di sekolah masing-masing, melalui perwakilan/petugas yang ditetapkan oleh IT Del bagi siswa yang berada di luar kawasan danau toba</p>

                <p>Seleksi JPS mencakup beberapa komponen penilaian yaitu:</p>
                <ol>
                <li>Nilai Rapor</li>
                <li>Prestasi Akademik</li>
                <li>Surat Rekomendasi</li>
                <li>Prestasi Non Akademik</li>
                </ol>

                <p>Persyaratan yang harus dipenuhi oleh pendaftar program JPS adalah sebagai berikut:</p>
                
                <strong>A. Persyaratan Umum</strong></br>
                
                <ol>
                    <li>Mengisi Formulir Pendaftaran JPS 2024/2025 secara online pada tautan berikut :<a href = "https://spmbapp.del.ac.id/index.php" style="color:blue;"> https://spmbapp.del.ac.id/index.php</a></li>
                    <li>Melampirkan Surat Rekomendasi dari Kepala Sekolah atau yang mewakili.</li>
                    <li>Melampirkan scan rapor kelas X s.d XII sampai semester V.</li>
                    <li>Melampirkan sertifikat/piagam penghargaan akademis dan non akademis (jika ada).</li>
                    <li>Siswa berasal dari jurusan yang <strong>tidak termasuk</strong> dalam kelompok Ilmu sosial, Budaya atau Bahasa.</li>
                    <li>Usia <strong>maksimum 21 tahun</strong> per 31 Agustus 2024;</li>
                    <li>Memiliki Nilai Matematika, dan Fisika minimal 80.00, serta Bahasa Inggris minimal 70.00, pada setiap semester, <strong>ATAU</strong> ranking <strong><=5</strong> setiap semester, kecuali untuk jenjang DIV dan DIII, ranking <= 10.</li>
                    <li>Dapat memilih <strong>maksimal 3 pilihan program studi</strong>,  dari 9 program studi yang ada di IT Del yakni :
                    <ol type = "a">
                        <li><strong>Fakultas Vokasi [FV], Program Studi:</strong>
                        <ol>
                            <li>Teknologi Informasi (D3)</li>
                            <li>Teknologi Komputer (D3)</li>
                            <li>Teknologi Rekayasa Perangkat Lunak (D4)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Informatika & Teknik Elektro [FITE], Program Studi:</strong>
                        <ol>
                            <li>Informatika (S1)</li>
                            <li>Teknik Elektro (S1)</li>
                            <li>Sistem Informasi (S1)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Teknologi Industri [FTI], Program Studi:</strong>
                        <ol>
                            <li>Manajemen Rekayasa (S1)</li>
                            <li>Teknik Metalurgi (S1)</li>
                        </ol>
                        </li>
                        <li><strong>Fakultas Bioteknologi [FB], Program Studi:</strong>
                        <ol>
                            <li>Teknik Bioproses (S1)</li>
                        </ol>
                        </li>
                    </ol>
                    </li>
                </ol>',
                'created_by'=>'admin',
                'updated_by'=>'admin',
            ],
        ]);
    }
}
