<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index(){

        if(auth()->user()->is_admin){
            abort(403, 'THIS ACTION IS UNAUTHORIZED.');
        }

        return view('vote', [
            'title' => 'Vote'
        ]);

    }
}
