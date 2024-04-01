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
        $user = User::query()->where('username', $request->username);
        $user->delete();

        return back()->with('successDelete', 'Berhasil menghapus ' . $request->username);

    }

    public function dataKandidat(){

        $this->authorize('admin');
        return view('data-kandidat', [
            "title" => "Data Kandidat",
            "kandidats" => Kandidat::all(),
        ]);

    }


    
    public function tambahKandidat(){
        return view('form-kandidat', [
            "title" => "Form Tambah Kandidat"
        ]);      
    }


    public function postTambahKandidat(Request $request){

        $this->authorize('admin');
        
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'image' => 'image|file|max:5000',
            'profil' => 'required',
            'visiMisi' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }


        $kandidat = new Kandidat();
        $kandidat->nama_lengkap = $request->nama;
        $kandidat->image = $validatedData['image'];
        $kandidat->visi = $request->profil;
        $kandidat->misi = $request->visiMisi;
        $kandidat->save();
        

        return redirect('/admin/data-kandidat')->with('success', 'Data kandidat sudah ditambahkan');     

        

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
