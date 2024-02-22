<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function indexAdmin(): View {
        return view('login-admin', [
          "title" => "Login Admin"  
        ]);
    }

    public function indexVoters(): View {
        return view('login-pemilih', [
            "title" => "Login Pemilih"
        ]);
    }
}
