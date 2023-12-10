<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\AdmisiController;
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
    Route::post('/data-institut', [AdminPanelController::class, 'ubahDataInstitut'])->name('ubahDataInstitut');
    Route::post('/add-social-media', [AdminPanelController::class, 'addSocialMedia'])->name('addSocialMedia');
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
    Route::delete('/remove-admin', [AdminController::class, 'removeAdmin'])->name('remove-admin');
});
