<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login-admin', [LoginController::class, 'indexAdmin']);
Route::get('/login-pemilih', [LoginController::class, 'indexVoters']);

Route::get('/register', [RegisterController::class, 'index']);