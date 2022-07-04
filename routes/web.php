<?php

use App\Http\Controllers\Admin\KecamatanController;
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

Route::get('/', function () {
    return view('landingPage.index');
});
Route::get('/admin/dashboard', function () {
    return view('admin.index');
});
// kecamatan
Route::get('admin/kecamatan', [KecamatanController::class, 'index'])->name('indexKecamatan');
Route::get('admin/kecamatan/create', [KecamatanController::class, 'create_view']);
Route::post('admin/kecamatan/submit', [KecamatanController::class, 'submit'])->name('tambahKecamatan');
Route::post('admin/kecamatan/delete', [KecamatanController::class, 'delete'])->name('hapusKecamatan');
Route::get('admin/kecamatan/edit/{id}', [KecamatanController::class, 'edit_view']);
Route::post('admin.kecamatan/update', [KecamatanController::class, 'update'])->name('simpanKecamatan');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
