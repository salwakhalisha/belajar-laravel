<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lokal extends Model
{
    //
    protected $fillable = ['nama_kelas','wali_kelas'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
