<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\FacultyController;

use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\AdminPanelController;
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
        Route::get('/program', [AdminPanelController::class, 'getProgramPanel'])->name('program-panel');
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

Route::get('/program', [ProgramController::class,'program'])->name('program');
Route::get('/fakultas', [FacultyController::class,'getFakultas'])->name('fakultas');
Route::get('/prodi', [MajorController::class,'getProdi'])->name('prodi');
Route::post('/faculties/store', [FacultyController::class, 'store'])->name('faculties.store');
Route::post('/major/store', [MajorController::class, 'store'])->name('major.store');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::put('/faculty/{id}/update', [FacultyController::class, 'update'])->name('faculty.update');
Route::patch('/major/{id}/update', [MajorController::class, 'update'])->name('major.update');
Route::patch('/employee/{id}/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/admin-panel/program_panel/faculty/{id}/delete', [FacultyController::class, 'destroy'])->name('admin.program.faculty.destroy');
Route::delete('/admin-panel/program_panel/major/{id}/delete', [MajorController::class, 'destroy'])->name('admin.program.major.destroy');
Route::delete('/admin-panel/program_panel/employee/{id}/delete', [EmployeeController::class, 'destroy'])->name('admin.program.employee.destroy');



// End of ROUTE PROGRAM STUDI [TEAM 02]

//----
Route::get('/prestasi', [PrestasiController::class, 'getviewPrestasi'])->name('prestasi.prestasiOverview');
Route::get('/prestasiInstitut', [PrestasiController::class, 'getviewPrestasiInstitut'])->name('prestasi.prestasiInstitut');
Route::get('/prestasiDosenStaff', [PrestasiController::class, 'getviewPrestasiDosenStaff'])->name('prestasi.prestasiDosenStaff');
Route::get('/prestasiMahasiswa', [PrestasiController::class, 'getviewPrestasiMahasiswa'])->name('prestasi.prestasiMahasiswa');

