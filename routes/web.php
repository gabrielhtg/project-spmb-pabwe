<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PengumumanController;

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

// HEAD
Route::get('/admisi/sarjana', function () {
    return view('admisi.sarjana');
});

Route::get('/admisi/diploma', function () {
    return view('admisi.diploma');
});

Route::get('/admisi/sarjanaterapan', function () {
    return view('admisi.sarjanaTerapan');
});
// =======
Route::get('/fasilitas-Asrama', [FasilitasController::class, "getviewAsrama"])->name("fasilitas.asrama");
Route::get('/fasilitas-Kesehatan-dan-Olahraga', [FasilitasController::class, "getviewKesehatandanOlahraga"])->name("fasilitas.kesehatandanolahraga");
Route::get('/fasilitas-Area-Mahasiswa', [FasilitasController::class, "getviewAreaMahasiswa"])->name("fasilitas.areamahasiswa");
Route::get('/fasilitas-Laboratorium', [FasilitasController::class, "getviewLaboratorium"])->name("fasilitas.laboratorium");
Route::get('/fasilitas-Layanan-Makanan', [FasilitasController::class, "getviewLayananMakanan"])->name("fasilitas.layananmakanan");
Route::get('/pengumuman', [PengumumanController::class, 'getviewPengumuman'])->name("pengumuman");
// >>>>>>> 7e272ebdb70972483ef0cea8437196f00fd3bfff


