<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdmisiController;
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
        Route::get('/', [AdminPanelController::class, 'getAdminPanel'])->name('admin-panel');
        Route::get('/spmb-dashboard', [AdminPanelController::class, 'getDashboardPanel'])->name('spmb-dashboard');
        Route::get('/admisi-panel', [AdminPanelController::class, 'getAdmisiPanel'])->name('admisi-panel');
        Route::get('/edit-profile', [AdminPanelController::class, 'getEditProfile'])->name('edit-profile');
        Route::get('/admins', [AdminPanelController::class, 'getAddAdminView'])->name('admins');
        Route::get('/prestasipanel', [AdminPanelController::class, 'getPrestasiPanel'])->name('prestasipanel');
        Route::get('/testimonipanel', [AdminPanelController::class, 'getTestimoniPanel'])->name('testimonipanel');
        
        Route::prefix('/admisi-panel')->group(function(){
            Route::post('/addjalurpendaftaran', [AdmisiController::class,'addJalur'])->name('addJalur');
            Route::post('/edit-jalur-pendaftaran', [AdmisiController::class,'editJalur'])->name('editJalur');
            Route::post('/delete-jalur-pendaftaran', [AdmisiController::class,'removeJalur'])->name('removeJalur');
            Route::delete('/delete-lokasi/{id}', [AdminPanelController::class, 'destroyLokasi'])->name('post.destroy.lokasi');
            Route::delete('/delete-jenis/{id}', [AdminPanelController::class, 'destroyJenisTes'])->name('post.destroy.jenis');
            Route::post('/edit-lokasi', [AdminPanelController::class, 'postEditLokasi'])->name('post.lokasi.edit');
            Route::post('/edit-jenis', [AdminPanelController::class, 'postEditJenis'])->name('post.jenis.edit');
            Route::post('/add-lokasi', [AdmisiController::class, 'postLokasiTes'])->name('post.lokasi');
            Route::post('/add-jenis', [AdmisiController::class, 'postJenistes'])->name('post.jenis');
        });
    });

    Route::prefix('/prestasi')->group(function () {
        /* Prestasi Panel */
        Route::get('/', [AdminPanelController::class, 'getPrestasiPanel'])->name('prestasipanel');
        Route::post('/add', [AdminPanelController::class, 'addPrestasi'])->name('addPrestasi');
        Route::post('/delete', [AdminPanelController::class, 'deletePrestasi'])->name('deletePrestasi');
        Route::post('/update', [AdminPanelController::class, 'updatePrestasi'])->name('updatePrestasi');
    });
});

Route::get('/fasilitas-Asrama', [FasilitasController::class, "getviewAsrama"])->name("fasilitas.asrama");
Route::get('/fasilitas-Kesehatan-dan-Olahraga', [FasilitasController::class, "getviewKesehatandanOlahraga"])->name("fasilitas.kesehatandanolahraga");
Route::get('/fasilitas-Area-Mahasiswa', [FasilitasController::class, "getviewAreaMahasiswa"])->name("fasilitas.areamahasiswa");
Route::get('/fasilitas-Laboratorium', [FasilitasController::class, "getviewLaboratorium"])->name("fasilitas.laboratorium");
Route::get('/fasilitas-Layanan-Makanan', [FasilitasController::class, "getviewLayananMakanan"])->name("fasilitas.layananmakanan");
Route::get('/pengumuman', [PengumumanController::class, 'getviewPengumuman'])->name("pengumuman");

//----
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

// ROUTE PRESTASI [TEAM 03]
Route::get('/prestasi', [PrestasiController::class, 'getviewPrestasi'])->name('prestasi.prestasiOverview');
Route::get('/prestasiInstitut', [PrestasiController::class, 'getviewPrestasiInstitut'])->name('prestasi.prestasiInstitut');
Route::get('/prestasiDosenStaff', [PrestasiController::class, 'getviewPrestasiDosenStaff'])->name('prestasi.prestasiDosenStaff');
Route::get('/prestasiMahasiswa', [PrestasiController::class, 'getviewPrestasiMahasiswa'])->name('prestasi.prestasiMahasiswa');


