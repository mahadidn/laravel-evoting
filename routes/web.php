<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

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
    return view('index', [
        "title" => "judul"
    ]);
});

Route::get('/kandidat', function(){
    return view('kandidat', [
        "title" => "kandidat"
    ]);
});

Route::get('/quick-count', function(){
    return view('quick-count', [
      "title" => "Quick Count"  
    ]);
});

// login
Route::get('/login-pemilih', [LoginController::class, 'indexVoters'])->name('login')->middleware('guest');
Route::post('/login-pemilih', [LoginController::class, 'authenticate'])->middleware('guest');
// logout
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// vote
Route::get('/vote', [VoteController::class, 'index'])->middleware('auth');



// admin role

Route::middleware('isadmin')->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
    
    // data pemilih
    Route::get('/admin/data-pemilih', [AdminController::class, 'dataPemilih']);
    Route::post('/admin/data-pemilih/{username}/hapus', [AdminController::class, 'hapusPemilih']);
    // data kandidat
    Route::get('/admin/data-kandidat', [AdminController::class, 'dataKandidat']);
    Route::get('/admin/data-kandidat/tambah', [AdminController::class, 'tambahKandidat']);
    Route::post('/admin/data-kandidat/tambah', [AdminController::class, 'postTambahKandidat']);
    // data voting
    Route::get('/admin/data-voting', [AdminController::class, 'dataVoting']);
    // rekapitulasi voting
    Route::get('/admin/rekapitulasi-voting', [AdminController::class, 'rekapitulasiVoting']);
    // data pengguna
    Route::get('/admin/data-pengguna', [AdminController::class, 'dataPengguna']);
    // ganti password
    Route::get('/admin/ganti-password', [AdminController::class, 'gantiPassword']);
});


