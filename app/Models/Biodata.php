<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    public function data_siswa ()
    {
        $data=array (
            array ("nama"=>"Mingyu","kelas"=>"SEVENTEEN"),
            array ("nama"=>"Scoups","kelas"=>"SEVENTEEN"),
            array ("nama"=>"The8","kelas"=>"SEVENTEEN"),
            array ("nama"=>"San","kelas"=>"ATEEZ"),
            array ("nama"=>"Bang Chan","kelas"=>"STRAYKIDS")
        );
        return $data;
    }
}
