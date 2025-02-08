<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LatihanController extends Controller
{
    //
    public function latihan()

    {
        $tanggal=Carbon::now();
        return view('latihan',
        [
            "judul"=>'Belajar Laravel 11',
            "tanggal"=>$tanggal->now()->isoFormat('dddd, D MMMM Y'),
            "materi"=>'controller',
            "menu"=>"latihan"
            
        ]);
        
    }
    public function Biodata ()
    {
         $data= new Biodata();
        return view('Biodata',
        [
            "Biodata"=>$data->data_siswa(),
            "menu"=> "Biodata"
        ]);
    }
}
