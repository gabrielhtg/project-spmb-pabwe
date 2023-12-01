<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\MitraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'getDashboard'])->name('dashboard');

Route::get('/admisi', [DashboardController::class, 'getAdmisi'])->name('admisi');
Route::get('/admisi/jalur-pendaftaran', [DashboardController::class, 'getJalurPendaftaran'])->name('jalur-pendaftaran');
Route::get('/admisi/biaya-studi', [DashboardController::class, 'getBiayaStudi'])->name('biaya-studi');
Route::get('/admisi/persyaratan-khusus', [DashboardController::class, 'getPersyaratanKhusus'])->name('persyaratan-khusus');


Route::get('/faqs', function () {
    return view('faq.faq');
});

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa.index');

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
Route::get('/logout', [AuthController::class, 'getLogout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::prefix('/admin-panel')->group(function () {
//        Route::post('/', [AdminPanelController::class, 'postAdminPanel'])->name('post.adminModel-panel-dashboard');
        Route::get('/', [AdminPanelController::class, 'getAdminPanel'])->name('admin-panel');
        Route::get('/spmb-dashboard', [AdminPanelController::class, 'getDashboardPanel'])->name('spmb-dashboard');
        Route::get('/admisi-panel', [AdminPanelController::class, 'getAdmisiPanel'])->name('admisi-panel');
        Route::get('/edit-profile', [AdminPanelController::class, 'getEditProfile'])->name('edit-profile');

        /* Routing Kelompok 3 -  (Prestasi, Testimoni)*/
        /* Bagian Prestasi */
        Route::get('/prestasipanel', [AdminPanelController::class, 'getPrestasiPanel'])->name('prestasipanel');

        /* Bagian Testimoni */
        Route::get('/testimonipanel', [AdminPanelController::class, 'getTestimoniPanel'])->name('testimonipanel');

    });
});

// =======
Route::get('/fasilitas-Asrama', [FasilitasController::class, "getviewAsrama"])->name("fasilitas.asrama");
Route::get('/fasilitas-Kesehatan-dan-Olahraga', [FasilitasController::class, "getviewKesehatandanOlahraga"])->name("fasilitas.kesehatandanolahraga");
Route::get('/fasilitas-Area-Mahasiswa', [FasilitasController::class, "getviewAreaMahasiswa"])->name("fasilitas.areamahasiswa");
Route::get('/fasilitas-Laboratorium', [FasilitasController::class, "getviewLaboratorium"])->name("fasilitas.laboratorium");
Route::get('/fasilitas-Layanan-Makanan', [FasilitasController::class, "getviewLayananMakanan"])->name("fasilitas.layananmakanan");
Route::get('/pengumuman', [PengumumanController::class, 'getviewPengumuman'])->name("pengumuman");

//======
Route::get('/mitra/mitra', [MitraController::class, 'mitra'])->name('mitra.mitra');

Route::get('/form', function () {
    return view('chatbot.form');
})->name('form');

// ROUTE PROGRAM STUDI [TEAM 02]

Route::get('/program', function () {
    return view('program.program');
});

Route::get('/fakultas', function () {
    return view('program.fakultas');
});

Route::get('/prodi', function () {
    return view('program.prodi');
});

// End of ROUTE PROGRAM STUDI [TEAM 02]

//----
Route::get('/prestasi', [PrestasiController::class, 'getviewPrestasi'])->name('prestasi.prestasiOverview');
Route::get('/prestasiInstitut', [PrestasiController::class, 'getviewPrestasiInstitut'])->name('prestasi.prestasiInstitut');
Route::get('/prestasiDosenStaff', [PrestasiController::class, 'getviewPrestasiDosenStaff'])->name('prestasi.prestasiDosenStaff');
Route::get('/prestasiMahasiswa', [PrestasiController::class, 'getviewPrestasiMahasiswa'])->name('prestasi.prestasiMahasiswa');


