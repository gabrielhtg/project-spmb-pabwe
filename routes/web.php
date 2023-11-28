<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PengumumanController;

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

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('/admisi', function () {
    return view('admisi.admisi');
});

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');

Route::prefix('/admin-panel')->group(function () {
    Route::get('/', [AdminPanelController::class, 'getAdminPanel'])->name('admin-panel');
});
// =======
Route::get('/fasilitas-Asrama', [FasilitasController::class, "getviewAsrama"])->name("fasilitas.asrama");
Route::get('/fasilitas-Kesehatan-dan-Olahraga', [FasilitasController::class, "getviewKesehatandanOlahraga"])->name("fasilitas.kesehatandanolahraga");
Route::get('/fasilitas-Area-Mahasiswa', [FasilitasController::class, "getviewAreaMahasiswa"])->name("fasilitas.areamahasiswa");
Route::get('/fasilitas-Laboratorium', [FasilitasController::class, "getviewLaboratorium"])->name("fasilitas.laboratorium");
Route::get('/fasilitas-Layanan-Makanan', [FasilitasController::class, "getviewLayananMakanan"])->name("fasilitas.layananmakanan");
Route::get('/pengumuman', [PengumumanController::class, 'getviewPengumuman'])->name("pengumuman");

//----
Route::get('/mitra/mitra', [MitraController::class, 'mitra'])->name('mitra.mitra');

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