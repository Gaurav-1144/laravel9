<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
      $data = Http::get('https://reqres.in/api/users?page=1');
      return view('Users',['collection'=>$data['data']]);
    }

    public function postdata(Request $req){
        $req->session()->flash('msg',"Data Reached Successfully");
        return redirect('userdata');
      }
}
