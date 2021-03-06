<?php

use App\Http\Controllers\Admin\KecamatanController;
use App\Http\Controllers\Admin\KosController;
use App\Http\Controllers\Admin\OwnerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\GeneralController;
use App\Http\Controllers\User\KosController as UserKosController;
use App\Models\Kos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/admin/dashboard', function () {
//     return view('admin.index');
// });
// kecamatan
Route::get('admin/kecamatan', [KecamatanController::class, 'index'])->name('indexKecamatan');
Route::get('admin/kecamatan/create', [KecamatanController::class, 'create_view']);
Route::post('admin/kecamatan/submit', [KecamatanController::class, 'submit'])->name('tambahKecamatan');
Route::post('admin/kecamatan/delete', [KecamatanController::class, 'delete'])->name('hapusKecamatan');
Route::get('admin/kecamatan/edit/{id}', [KecamatanController::class, 'edit_view']);
Route::post('admin/kecamatan/update', [KecamatanController::class, 'update'])->name('simpanKecamatan');

// pemilik kos
Route::get('admin/owner', [OwnerController::class, 'index'])->name('indexOwner');
Route::get('admin/owner/create', [OwnerController::class, 'create_view']);
Route::post('admin/owner/submit', [OwnerController::class, 'submit'])->name('tambahOwner');
Route::post('admin/owner/delete', [OwnerController::class, 'delete'])->name('hapusOwner');
Route::get('admin/owner/edit/{id}', [OwnerController::class, 'edit_view']);
Route::post('admin/owner/update', [OwnerController::class, 'update'])->name('simpanOwner');

// kos
Route::get('admin/kos', [KosController::class, 'index'])->name('indexKos');
Route::get('admin/kos/create', [KosController::class, 'create_view']);
Route::post('admin/kos/submit', [KosController::class, 'submit'])->name('tambahKos');
Route::get('admin/kos/edit/{id}', [KosController::class, 'edit_view']);
Route::post('admin/kos/update', [KosController::class, 'update'])->name('simpanKos');
Route::post('admin/kos/delete', [KosController::class, 'delete'])->name('hapusKos');
Route::post('admin/kos/get/owner', [KosController::class, 'get_owner'])->name('getOwner');

// pesan
Route::get('admin/pesan', [GeneralController::class, 'admin_pesan'])->name('adminPesan');
Route::post('admin/pesan/set/testi', [GeneralController::class, 'set_testimoni'])->name('setTestimoni');

// User's Route
Route::get('/', [GeneralController::class, 'index'])->name('home');
Route::get('cari-kos', [UserKosController::class, 'index']);
Route::post('cari-kos', [UserKosController::class, 'findKos'])->name('findKos');
Route::post('cari-kos/hasil', [UserKosController::class, 'result'])->name('resultKos');

Route::post('/message/submit', [GeneralController::class, 'submit_message'])->name('tambahPesan');

Route::get('admin/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('admin/login', [GeneralController::class, 'login'])->name('login');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
require __DIR__.'/auth.php';
