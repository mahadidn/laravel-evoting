<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View{
        
        return view('registrasi', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request){
        
        $validate = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:5|unique:users',
            'email' => 'required|email:filter|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validate['username'] = $request->username;
        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);
        // dd($validate);
        return redirect('/login-pemilih')->with('success', 'Berhasil register, silahkan login!');
        
    }
}
