<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function index(Request $req){
        $name = $req->input('name');
        $req->session()->put('user',$name);
        return redirect('profile');
    }
}
