<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_faq extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq')->insert([
            [
                'kategori' => 'Registrasi',
                'pertanyaan' => 'Apa saja tahapan proses registrasi?',
                'jawaban' => 'Melakukan Pendaftaran Ulang secara onsite sesuai jadwal dari jalur masuk yang diikuti (PMDK, USM1, etc : jadwal dapat dilihat dari laman pengumuman) => Calon mahasiswa WAJIB didampingi oleh orangtua/wali pada saat pendaftaran ulang. ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Registrasi',
                'pertanyaan' => 'Apakah ada sistem cicilan atau penundaan untuk pembayaran biaya pendidikan?',
                'jawaban' => 'TIDAK ADA, semua biaya awal sudah harus dibayarkan saat proses pendaftaran ulang mahasiswa baru.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Registrasi',
                'pertanyaan' => 'Saya sudah mengupload dokumen registrasi online namum belum terverivikasi, apa yang harus saya lakukan?',
                'jawaban' => 'Hubungi admin IT Del melalui chatbot maupun nomor telepon yang tertera dalam grup whatsapp calon mahasiswa baru',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Registrasi',
                'pertanyaan' => 'Saya sudah dinyatakan lulus pada program studi tertentu, apakah saya masih bisa mengganti program studi lain?',
                'jawaban' => 'TIDAK BISA, mahasiwa baru hanya bisa mengambil program studi dimana ia lulus melalui jalur pendaftaran tersebut. Jika menginginkan program studi lain, maka calon mahasiswa dapat mengikuti jalur pendaftaran selanjutnya yang masih dibuka.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Beasiswa',
                'pertanyaan' => 'Saya sudah mendaftar jalur beasiswa tertentu, apakah boleh saya mendafar jalur beasiswa lainnya?',
                'jawaban' => 'Calon mahasiswa dapat mendaftar jalur beasiswa lainnya sesuai syarat dan ketentuan dari masing-masing beasiswa yang diikuti.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Beasiswa',
                'pertanyaan' => 'Apa perbedaan beasiswa internal dan beasiswa eksternal?',
                'jawaban' => 'Beasiswa internal merupakan beasiswa yang disediakan oleh Institut Teknologi Del. Informasi mengenai beasiswa dapat diakses melalui laman beasiswa.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Beasiswa',
                'pertanyaan' => 'Apakah untuk mendaftar jalur beasiswa, saya harus mengikuti ujian?',
                'jawaban' => 'Beasiswa internal tidak perlu mengikuti ujian (info selengkapnya dapat dilihat melalui laman beasiswa), sedangkan untuk beasiswa eksternal tergantung dari syarat dan ketentuan yang dimiliki oleh beasiswa tersebut.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Umum',
                'pertanyaan' => 'Bagaimana cara melakukan pembayaran biaya pendaftaran SPMB IT del?',
                'jawaban' => 'Klik icon "Daftar Sekarang" pada website SPMB IT Del atau ikuti petunjuk pendaftaran pada menu "Pedoman Pendaftaran".',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Umum',
                'pertanyaan' => 'Berapa biaya pendidikan di IT Del?',
                'jawaban' => 'Biaya pendidikan setiap program studi berbeda. Informasi biaya pendidikan dapat dilihat pada Biaya Studi di bagian Admisi.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Umum',
                'pertanyaan' => 'Bagaimana jika saya lupa password akun SPMB saya?',
                'jawaban' => 'Jika lupa password akun pendaftaran SMB, silahkan klik tombol Lupa Password pada halaman login akun pendaftaran. Setelah itu masukan alamat email akun pendaftaran. Sistem akan mengirimkan konfirmasi reset password pada email pendaftaran Anda.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Umum',
                'pertanyaan' => 'Apa akreditasi program studi IT Del?',
                'jawaban' => 'Akreditasi setiap program studi berbeda. Informasi Akreditasi dapat dilihat pada profil program studinya masing-masing melalui "Menu Akreditasi".',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Jalur Seleksi',
                'pertanyaan' => 'Apakah saya boleh mendaftar jalur seleksi lainnya jika saya sudah daftar jalur seleksi tertentu?',
                'jawaban' => 'Peserta bisa mendaftarkan dirinya di semua jalur seleksi dengan ketentuan bahwa peserta belum melakukan pendaftaran ulang di jalur seleksi sebelumnya',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Jalur Seleksi',
                'pertanyaan' => 'Apa perbedaan jalur seleksi PMDK, USM dan UTBK?',
                'jawaban' => 'PMDK adalah salah satu jalur penerimaan mahasiswa baru yang diselenggarakanmelalui penelusuran minat, bakat, dan kemampuan calon mahasiswa yang dilakukan di sekolah masing-masing. USM adalah salah satu jalur penerimaan mahasiswa baru yang diselenggarakan melalui tes akademik dan psikotes. Sedangkan UTBK adalah salah satu jalur penerimaan mahasiswa baru yang diselenggarakan oleh Institut Teknologi Del (IT Del), melalui sertifikat UTBK yang diselenggarakan oleh Lembaga Tes Masuk Perguruan Tinggi Negeri (LTMPT). 
                ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Jalur Seleksi',
                'pertanyaan' => 'Jika saya sudah mendaftar jalur seleksi, selanjutnya apa yang harus saya lakukan?',
                'jawaban' => 'Jika pendaftar sudah mendaftar salah satu jalur seleksi, silahkan tunggu informasi selanjutnya yang akan diberikan oleh panitia melalui email maupun whatsapp. ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Pengumuman',
                'pertanyaan' => 'Kapan pengumuman kelulusan jalur PMDK?',
                'jawaban' => 'Pengumuman jalur PMDK akan diumumkan melalui laman Pengumuman dalam website SPMB',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Pengumuman',
                'pertanyaan' => 'Kapan pengumuman kelulusan jalur USM 1-3?',
                'jawaban' => 'Pengumuman jalur PMDK akan diumumkan melalui laman Pengumuman dalam website SPMB',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Pengumuman',
                'pertanyaan' => 'Jika saya dinyatakan tidak lulus, apakah saya masih dapat mendaftar di Institut Teknologi Del?',
                'jawaban' => 'Sesuai dengan persyaratan, peserta yang tidak lulus pada salah satu jalur seleksi masih bisa untuk mendaftar dan mengikuti jalur seleksi lainnya.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Pengumuman',
                'pertanyaan' => 'Saya dinyatakan lulus, namun bukan pada program studi yang saya inginkan. Apa yang harus saya lakukan?',
                'jawaban' => 'Jika dinyatakan lulus tetapi tidak sesuai dengan program studi yang diinginkan, mahasiswa tidak bisa mengubahnya. Namun masih bisa untuk mendaftar dan mengikuti jalur seleksi lainnya dengan memilih program studi yang diinginkan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Persyaratan Pendaftaran',
                'pertanyaan' => 'Apakah ada syarat umum untuk mendaftar SPMB IT Del?',
                'jawaban' => 'Persyaratan umum setiap jalur pendaftaran berbeda. Informasi syarat umum setiap jalur pendaftaran dapat dilihat pada "Jalur Pendaftaran" di bagian Admisi. ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Persyaratan Pendaftaran',
                'pertanyaan' => 'Bagaimana jika ada nilai mata pelajaran yang tidak saya miliki pada saat memasukkan nilai?',
                'jawaban' => 'Jika ada komponen nilai mata pelajaran yang tidak dimiliki calon mahasiswa baru, maka nilai tersebut dapat diisi angka 0 (nol).',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori' => 'Persyaratan Pendaftaran',
                'pertanyaan' => 'Apakah ada ketentuan upload dokumen rapor atau lainnya saat pendaftaran?',
                'jawaban' => 'Ada. Dokumen yang diupload pada saat pendaftaran mengikuti ketentuan sebagai berikut: Dokumen wajib discan per semester dalam format .pdf atau .jpg, ukuran dokumen maksimal 2 MB, dokumen tidak wajib dilegalisir. Dokumen perlu dilegalisir jika menggunakan scan photocopy dari dokumen aslinya.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
