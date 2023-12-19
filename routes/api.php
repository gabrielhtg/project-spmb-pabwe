<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\AdmisiController;
use App\Http\Controllers\JadwalUjianController;
use App\Http\Controllers\SubJalurPendaftaranController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/add-infografis-pmdk', [AdmisiController::class, 'addInfografisPmdk'])->name('addInfografisPmdk');
    Route::post('/add-infografis-usm', [AdmisiController::class, 'addInfografisUsm'])->name('addInfografisUsm');
    Route::post('/add-infografis-utbk', [AdmisiController::class, 'addInfografisUtbk'])->name('addInfografisUtbk');
    Route::post('/add-infografis', [AdmisiController::class, 'addInfografis'])->name('addInfografis');
    Route::post('/data-institut', [AdminPanelController::class, 'ubahDataInstitut'])->name('ubahDataInstitut');
    Route::post('/add-social-media', [AdminPanelController::class, 'addSocialMedia'])->name('addSocialMedia');
    Route::post('/update-social-media', [AdminPanelController::class, 'updateSocialMedia'])->name('updateSocialMedia');
    Route::post('/save-hero-section', [AdminPanelController::class, 'saveHeroSection'])->name('saveHeroSection');
    Route::post('/updateHeroSection', [AdminPanelController::class, 'updateHeroSection'])->name('updateHeroSection');
    Route::post('/save-akreditasi-section', [AdminPanelController::class, 'updateAkreditasiSection'])->name('updateAkreditasiSection');
    Route::delete('/remove-social-media', [AdminPanelController::class, 'removeSocialMedia'])->name('removeSocialMedia');
    Route::post('/add-alamat', [AdminPanelController::class, 'addAlamat'])->name('addAlamat');
    Route::post('/edit-alamat', [AdminPanelController::class, 'editAlamat'])->name('editAlamat');
    Route::post('/set-header-admisi', [AdmisiController::class, 'setHeader'])->name('set-header-admisi');
    Route::delete('/remove-alamat', [AdminPanelController::class, 'removeAlamat'])->name('removeAlamat');
    Route::post('/add-admin', [AdminController::class, 'addAdmin'])->name('add-admin');
    Route::post('/edit-admin', [AdminController::class, 'editAdmin'])->name('edit-admin');
    Route::post('/edit-nomor-telepon', [AdminController::class, 'editNomorTelepon'])->name('editNomorTelepon');
    Route::post('/change-password', [AdminController::class, 'changeAdminPassword'])->name('changeAdminPassword');
    Route::delete('/remove-admin', [AdminController::class, 'removeAdmin'])->name('remove-admin');
    Route::delete('/remove-self', [AdminController::class, 'removeSelf'])->name('remove-self');
    Route::post('/add-email', [AdminController::class, 'addEmail'])->name('addEmail');
    Route::post('/edit-email', [AdminController::class, 'editEmail'])->name('editEmail');
    Route::post('/add-mbkm-non-kompetisi', [AdmisiController::class, 'addMbkmNonKompetisi'])->name('addMbkmNonKompetisi');
    Route::post('/add-mbkm-kompetisi', [AdmisiController::class, 'addMbkmKompetisi'])->name('addMbkmKompetisi');
    Route::post('/add-akreditasi-institusi', [AdminPanelController::class, 'addAkreditasiInstitusi'])->name('addAkreditasi');
    Route::delete('/delete-email', [AdminController::class, 'removeEmail'])->name('removeEmail');
    Route::delete('/remove-mbkm', [AdmisiController::class, 'removeMbkm'])->name('removeMbkm');
    Route::delete('/remove-infografis', [AdmisiController::class, 'removeInfografis'])->name('removeInfografis');
    Route::delete('/remove-no-telp', [AdminPanelController::class, 'removeNomorTelepon'])->name('removeNomorTelepon');
    Route::delete('/remove-akreditasi', [AdminPanelController::class, 'removeAkreditasi'])->name('removeAkreditasi');
    Route::post('/add-nomor-telepon', [AdminPanelController::class, 'addNomorTelepon'])->name('addNomorTelepon');
    Route::post('/add-jadwal-ujian', [JadwalUjianController::class, 'addJadwalUjian'])->name('addJadwalUjian');
    Route::post('/edit-jadwal-ujian', [JadwalUjianController::class, 'editJadwalUjian'])->name('editJadwalUjian');
    Route::delete('/delete-jadwal-ujian', [JadwalUjianController::class, 'removeJadwalUjian'])->name('removeJadwalUjian');
    Route::post('/addjalurpendaftaran', [AdmisiController::class,'addJalur'])->name('addJalur');
    Route::delete('/remove-jalur', [AdmisiController::class, 'removeJalur'])->name('removeJalur');
    Route::post('/addjadwalpendaftaran', [AdmisiController::class,'addJadwalPendaftaran'])->name('addJadwalPendaftaran');
    Route::post('/editJadwalPendaftaran', [AdmisiController::class,'editJadwalPendaftaran'])->name('editJadwalPendaftaran');
    Route::delete('/removeJadwalPendaftaran/{jadwalPendaftaran_id}', [AdmisiController::class, 'removeJadwalPendaftaran'])->name('removeJadwalPendaftaran');
    Route::post('/set-biaya-umum', [AdmisiController::class, 'setbiayaadmin'])->name('set-biaya-umum');
    Route::post('/add-sub-jalur-pendaftaran', [SubJalurPendaftaranController::class, 'addSubJalurPendaftaran'])->name('addSubJalurPendaftaran');
    Route::post('/edit-jalur-pendaftaran', [SubJalurPendaftaranController::class, 'editSubJalurPendaftaran'])->name('editSubJalurPendaftaran');
    Route::delete('/delete-jalur-pendaftaran', [SubJalurPendaftaranController::class, 'removeSubJalurPendaftaran'])->name('removeSubJalurPendaftaran');
    Route::post('/editbiayaPendaftaran', [AdmisiController::class,'editBiayaPendaftaran'])->name('editBiayaPendaftaran');
    Route::delete('/removeBiayaPendaftaran', [AdmisiController::class, 'removeBiayaPendaftaran'])->name('removeBiayaPendaftaran');
    Route::post('/pedoman-pendaftaran', [AdmisiController::class, 'addPedomanPendaftaran'])->name('pedoman-pendaftaran');
    Route::post('/pdf-biaya', [AdmisiController::class, 'addPdfbiaya'])->name('pdf_biaya');
    Route::post('/addDropdown', [\App\Http\Controllers\DropdownAdmisiController::class, 'addDropdown'])->name('addDropdown');
    Route::post('/editDropdown', [\App\Http\Controllers\DropdownAdmisiController::class, 'editDropdown'])->name('editDropdown');
    Route::post('/add-biaya-studi', [AdmisiController::class, 'addBiayaStudi'])->name('add_biaya_studi');
    Route::post('/edit-biaya-studi', [AdmisiController::class, 'editBiayaStudi'])->name('edit_biaya_studi');
    Route::delete('/remove-biaya-studi', [AdmisiController::class, 'removeBiayaStudi'])->name('remove_biaya_studi');
});
