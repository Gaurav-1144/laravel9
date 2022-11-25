<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UploadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apidata',[ApiController::class,'index']);
Route::post('/postsend',[ApiController::class,'postdata']);
Route::view('/userdata','sessionflash');
Route::view('/login','login');
Route::post('/loginpost',[UserAuth::class,'index']);
Route::view('/profile','profile');

Route::get('/logout',function(){
    if(session()->has('user')) {
        session()->pull('user',null);
        return redirect('login');
    }
});

Route::view('/imageview','Imageupload');
Route::post('/upload',[UploadController::class,'upload']);

// Route::view('/lang','localization');
Route::get('/langtest/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('localization');
});

