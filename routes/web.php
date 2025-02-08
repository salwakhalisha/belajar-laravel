<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $bias=array('Scoups','Mingyu','Haechan','Mark');
    return view('home',
    [
        "nama"=>"Salwa",
        "kelas"=>"XI RPL 1",
        "alamat"=>"Kebun Tengah",
        "bias"=>$bias,
        "menu"=>"home"
    ]);
})->name('home');

Route::get('/latihan',[LatihanController::class,'latihan'])->name('latihan');

Route::get('/Biodata',[LatihanController::class,'Biodata'])->name('Biodata');

Route::get('/index', function ()
{
    return view('index',
    [
        "menu"=>"index"
    ]);

})->name('index');

Route::get('/lokal',[LocalController::class,'index'])->name('lokal.index');

Route::get('/lokal/create',[LocalController::class,'create'])->name('lokal.create');

Route::post('/lokal',[LocalController::class,'store'])->name('lokal.store');

Route::get('/lokal/edit/{id}',[LocalController::class,'edit'])->name('lokal.edit');  

Route::put('/lokal/update',[LocalController::class,'update'])->name('lokal.update');

Route::delete('/lokal/delete/{id}',[LocalController::class,'destroy'])->name('lokal.hapus');

Route::resource('siswa',SiswaController::class);