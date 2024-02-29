<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $this->authorize('admin');
        return view('beranda', [
            'title' => 'Beranda',
            "jumlahPengguna" => User::count(),
            "jumlahKandidat" => Kandidat::count(),
            "jumlahPemilih" => User::where('is_admin', 0)->count(),
        ]);

    }

    public function dataPemilih(){

        $this->authorize('admin');
        return view('data-pemilih', [
            "title" => "Data Pemilih",
            "dataPemilih" => User::all()
        ]);

    }

    public function hapusPemilih(Request $request){

        $this->authorize('admin');
        return "Berhasil menghapus $request->username";

    }

    public function dataKandidat(){

        $this->authorize('admin');
        return view('data-kandidat', [
            "title" => "Data Kandidat",
        ]);

    }

    public function dataVoting(){

        $this->authorize('admin');
        return view('data-voting', [
            "title" => "Data Voting"
        ]);

    }

    public function rekapitulasiVoting(){

        $this->authorize('admin');
        return view('data-rekapitulasi-voting', [
            "title" => "Data Rekapitulasi Voting",

        ]);
        
    }

    public function dataPengguna(){

        $this->authorize('admin');
        return view('data-pengguna', [
            "title" => "Data Pengguna"
        ]);

    }

    public function gantiPassword(){

        $this->authorize('admin');
        return view('ganti-password', [
            "title" => "Ganti Password"
        ]);

    }

}
