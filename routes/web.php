<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BeritaController;

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

//Route::get('/', function () {   return view('welcome'); });

Route::get('/', [App\Http\Controllers\homeController::class, 'index']);

// menu with slug
Route::get('/detail/{slug}', [App\Http\Controllers\HalamanController::class, 'halaman'])->name('halaman');

Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
Route::get('/berita/cari', [App\Http\Controllers\BeritaController::class, 'cariBerita'])->name('berita.cari');
Route::get('/berita/{tag}', [App\Http\Controllers\BeritaController::class, 'beritaTag'])->name('berita.tag');
Route::get('/berita-detail/{id}', [App\Http\Controllers\BeritaDetailController::class, 'index']);

Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index']);
Route::get('/galeri-detail/{galeri}', [App\Http\Controllers\GaleriDetailController::class, 'detail'])->name('galeri-detail');

Route::get('/pimpinan-daerah', [App\Http\Controllers\PimpinanController::class, 'index']);
Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'index']);
Route::get('/lambang', [App\Http\Controllers\LambangKotaController::class, 'index']);
Route::get('/peta', [App\Http\Controllers\PetaKotaController::class, 'index']);
Route::get('/penghargaan', [App\Http\Controllers\PrestasiController::class, 'index']);

Route::get('/struktur', [App\Http\Controllers\StrukturOrganisasiController::class, 'index']);
Route::get('/geografis', [App\Http\Controllers\GeografisController::class, 'index']);
