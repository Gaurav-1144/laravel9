<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $req){
       return $req->file('img-upload')->store('img');
    }
}
