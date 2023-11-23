<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('HalamanDepan/beranda');
});

Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data-siswa');
Route::get('/create-siswa', [SiswaController::class, 'create'])->name('create-siswa');
Route::post('/simpan-siswa', [SiswaController::class, 'store'])->name('simpan-siswa');

Route::post('/update-siswa/{id}', [SiswaController::class, 'update'])->name('update-siswa');
Route::get('/delete-siswa/{id}', [SiswaController::class, 'destroy'])->name('delete-siswa');
Route::get('/edit-siswa/{id}', [SiswaController::class, 'edit'])->name('edit-siswa');