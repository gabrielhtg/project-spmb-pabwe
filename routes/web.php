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

Route::get('/admisi', function () {
    return view('admisi.admisi');
});

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
        Route::post('/', [AdminPanelController::class, 'postAdminPanel'])->name('post.admin-panel-dashboard');
        Route::get('/spmb-dashboard', [AdminPanelController::class, 'getDashboardPanel'])->name('spmb-dashboard');
        Route::get('/admisi-panel', [AdminPanelController::class, 'getAdmisiPanel'])->name('admisi-panel');
        Route::get('/edit-profile', [AdminPanelController::class, 'getEditProfile'])->name('edit-profile');
        Route::get('/fasilitas-admin', [AdminPanelController::class, 'getFasilitasAdmin'])->name('fasilitas-admin');
        Route::get('/fasilitas-admin-get', [AdminPanelController::class, 'getAddFasilitas'])->name('get.add-fasilitas');
        Route::post('/fasilitas/edit', [AdminPanelController::class, 'postEditFasilitas'])->name('post.fasilitas.edit');
        Route::post('/tambah-fasilitas', [AdminPanelController::class, 'postFasilitas'])->name('post.fasilitas');
        Route::delete('post-fasilitas/{id}', [AdminPanelController::class, 'destroy'])->name('post.destroy');
        Route::get('/pengumuman-admin', [AdminPanelController::class, 'getPengumumanPanel'])->name('pengumuman-panel');
        Route::get('/pengumuman-admin-get', [AdminPanelController::class, 'getAddPengumuman'])->name('get.add-pengumuman');
        Route::post('/tambah-pengumuman', [PengumumanController::class, 'postPengumuman'])->name('post.pengumuman');
        Route::post('/pengumuman/edit', [AdminPanelController::class, 'postEditPengumuman'])->name('post.edit.pengumuman');
        Route::delete('post-pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('post.destroy.pengumuman');
    });
});
Route::get('/fasilitas', [FasilitasController::class, "getviewFasilitas"])->name("fasilitas.fasilitas");

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

// End of ROUTE PROGRAM STUDI [TEAM 02]

//----
Route::get('/prestasi', [PrestasiController::class, 'getviewPrestasi'])->name('prestasi.prestasiOverview');
Route::get('/prestasiInstitut', [PrestasiController::class, 'getviewPrestasiInstitut'])->name('prestasi.prestasiInstitut');
Route::get('/prestasiDosenStaff', [PrestasiController::class, 'getviewPrestasiDosenStaff'])->name('prestasi.prestasiDosenStaff');
Route::get('/prestasiMahasiswa', [PrestasiController::class, 'getviewPrestasiMahasiswa'])->name('prestasi.prestasiMahasiswa');

