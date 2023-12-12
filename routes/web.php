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
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestimoniController;

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

Route::middleware('auth')->group(function () {
    Route::prefix('/admin-panel')->group(function () {
        Route::get('/', [AdminPanelController::class, 'getAdminPanel'])->name('admin-panel');
        Route::get('/spmb-dashboard', [AdminPanelController::class, 'getDashboardPanel'])->name('spmb-dashboard');
        Route::get('/admisi-panel', [AdminPanelController::class, 'getAdmisiPanel'])->name('admisi-panel');
        Route::get('/edit-profile', [AdminPanelController::class, 'getEditProfile'])->name('edit-profile');
        Route::get('/admins', [AdminPanelController::class, 'getAddAdminView'])->name('admins');
        Route::get('/prestasipanel', [AdminPanelController::class, 'getPrestasiPanel'])->name('prestasipanel');
        Route::get('/testimonipanel', [AdminPanelController::class, 'getTestimoniPanel'])->name('testimonipanel');
        Route::get('/logout', [AuthController::class, 'getLogout'])->name('logout');
        Route::get('/program', [AdminPanelController::class, 'getProgramPanel'])->name('program-panel');

        Route::prefix('/admisi-panel')->group(function () {
            Route::post('/addjalurpendaftaran', [AdmisiController::class, 'addJalur'])->name('addJalur');
            Route::post('/edit-jalur-pendaftaran', [AdmisiController::class, 'editJalur'])->name('editJalur');
            Route::post('/delete-jalur-pendaftaran', [AdmisiController::class, 'removeJalur'])->name('removeJalur');
            Route::delete('/delete-lokasi/{id}', [AdminPanelController::class, 'destroyLokasi'])->name('post.destroy.lokasi');
            Route::delete('/delete-jenis/{id}', [AdminPanelController::class, 'destroyJenisTes'])->name('post.destroy.jenis');
            Route::post('/edit-lokasi', [AdminPanelController::class, 'postEditLokasi'])->name('post.lokasi.edit');
            Route::post('/edit-jenis', [AdminPanelController::class, 'postEditJenis'])->name('post.jenis.edit');
            Route::post('/add-lokasi', [AdmisiController::class, 'postLokasiTes'])->name('post.lokasi');
            Route::post('/add-jenis', [AdmisiController::class, 'postJenistes'])->name('post.jenis');
        });

        Route::prefix('fasilitas-panel')->group(function () {
            Route::get('/fasilitas-admin', [AdminPanelController::class, 'getFasilitasAdmin'])->name('fasilitas-admin');
            Route::get('/fasilitas-admin-get', [AdminPanelController::class, 'getAddFasilitas'])->name('get.add-fasilitas');
            Route::post('/fasilitas/edit', [AdminPanelController::class, 'postEditFasilitas'])->name('post.fasilitas.edit');
            Route::post('/tambah-fasilitas', [AdminPanelController::class, 'postFasilitas'])->name('post.fasilitas');
            Route::delete('post-fasilitas/{id}', [AdminPanelController::class, 'destroy'])->name('post.destroy');
        });

        Route::prefix('pengumuman-panel')->group(function () {
            Route::get('/pengumuman-admin', [PengumumanController::class, 'getPengumumanPanel'])->name('pengumuman-panel');
            Route::get('/pengumuman-admin-get', [AdminPanelController::class, 'getAddPengumuman'])->name('get.add-pengumuman');
            Route::post('/tambah-pengumuman', [PengumumanController::class, 'postPengumuman'])->name('post.pengumuman');
            Route::post('/pengumuman/edit', [AdminPanelController::class, 'postEditPengumuman'])->name('post.edit.pengumuman');
            Route::delete('post-pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('post.destroy.pengumuman');
        });

        Route::prefix('prestasi-panel')->group(function () {
            /* Bagian Prestasi */
            Route::get('/', [AdminPanelController::class, 'getPrestasiPanel'])->name('prestasi.panel');
            Route::post('/add', [PrestasiController::class, 'postAddPrestasi'])->name('prestasi.add');
            Route::post('/edit', [PrestasiController::class, 'postEditPrestasi'])->name('prestasi.edit');
            Route::post('/delete', [PrestasiController::class, 'postDeletePrestasi'])->name('prestasi.delete');
        });

        Route::prefix('testimoni-panel')->group(function () {
            Route::get('/', [AdminPanelController::class, 'getTestimoniPanel'])->name('testimoni.panel');
            Route::post('/add', [TestimoniController::class, 'postAddTestimoni'])->name('testimoni.add');
//            Route::post('/edit', [AdminPanelController::class, 'getTestimoniPanel'])->name('testimonipanel');
//            Route::post('/delete', [AdminPanelController::class, 'getTestimoniPanel'])->name('testimonipanel');
        });
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

Route::get('/program', [ProgramController::class, 'program'])->name('program');
Route::get('/fakultas/{id}', [FacultyController::class, 'getFakultas'])->name('fakultas');
Route::get('/prodi/{id}', [MajorController::class, 'getProdi'])->name('prodi');
Route::post('/faculties/store', [FacultyController::class, 'store'])->name('faculties.store');
Route::post('/major/store', [MajorController::class, 'store'])->name('major.store');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::post('/course/store', [CourseController::class, 'store'])->name('course.store');
Route::put('/faculty/{id}/update', [FacultyController::class, 'update'])->name('faculty.update');
Route::patch('/major/{id}/update', [MajorController::class, 'update'])->name('major.update');
Route::patch('/employee/{id}/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::put('/course/{id}/update', [CourseController::class, 'update'])->name('course.update');
Route::delete('/admin-panel/program_panel/faculty/{id}/delete', [FacultyController::class, 'destroy'])->name('admin.program.faculty.destroy');
Route::delete('/admin-panel/program_panel/major/{id}/delete', [MajorController::class, 'destroy'])->name('admin.program.major.destroy');
Route::delete('/admin-panel/program_panel/employee/{id}/delete', [EmployeeController::class, 'destroy'])->name('admin.program.employee.destroy');
Route::delete('/admin-panel/program_panel/course/{id}/delete', [CourseController::class, 'destroy'])->name('admin.program.course.destroy');

// End of ROUTE PROGRAM STUDI [TEAM 03]
Route::get('/prestasi', [PrestasiController::class, 'getviewPrestasi'])->name('prestasi.prestasiOverview');
Route::get('/prestasi-institut', [PrestasiController::class, 'getviewPrestasiInstitut'])->name('prestasi.prestasiInstitut');
Route::get('/prestasi-dosen-staff', [PrestasiController::class, 'getviewPrestasiDosenStaff'])->name('prestasi.prestasiDosenStaff');
Route::get('/prestasi-mahasiswa', [PrestasiController::class, 'getviewPrestasiMahasiswa'])->name('prestasi.prestasiMahasiswa');
