<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $this->authorize('admin');
        return view('beranda');

    }

    public function dataPemilih(){

        $this->authorize('admin');
        return view('data-pemilih');

    }

    public function dataKandidat(){

        $this->authorize('admin');
        return view('data-kandidat');

    }

    public function dataVoting(){

        $this->authorize('admin');
        return view('data-voting');

    }

    public function rekapitulasiVoting(){

        $this->authorize('admin');
        return view('data-rekapitulasi-voting');
        
    }

    public function dataPengguna(){

        $this->authorize('admin');
        return view('data-pengguna');

    }

    public function gantiPassword(){

        $this->authorize('admin');
        return view('ganti-password');

    }

}
