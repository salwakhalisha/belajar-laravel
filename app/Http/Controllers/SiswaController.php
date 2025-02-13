<?php

namespace App\Http\Controllers;

use App\Models\lokal;
use App\Models\Siswa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SiswaController extends Controller
{
   public function index():View
   {
        $data_siswa=Siswa::all();
        return view('siswa.index',
        [
            "menu"=>"siswa",
            "title"=>"Data Siswa",
            "data_siswa"=>$data_siswa
        ]);
   }

   public function create():view
   {
       $kelas = lokal::all();
       return view('siswa.create', [
           'menu' => 'siswa',
           'title' => 'Tambah Data Siswa',
           'kelas' => $kelas
       ]);
   }
   public function store(Request $request):RedirectResponse
   {
       $validasi=$request->validate([
           'nama'=>'required',
           'nisn'=>'required',
           'jk'=>'required',
           'alamat'=>'required',
           'lokal_id'=>'required',
           'foto'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
       ],[
            "nama.required"=>"Nama Harus Diisi",
            "nisn.required"=>"NISN Harus Diisi",
            "jk.required"=>"Jenis Kelamin Harus Diisi",
            "alamat.required"=>"Alamat Harus Diisi",
            "lokal_id.required"=>"Kelas Harus Diisi",
            "foto.image"=>"Foto Harus Berupa Gambar",
            "foto.mimes"=>"Foto Harus Berformat jpeg, png, jpg, gif, svg",
            "foto.max"=>"Foto Maksimal Berukuran 2MB"
       ]
    );

       $simpan_foto=$request->file('foto')->store('foto_siswa');

       $siswa=new Siswa;
       $siswa->nama=$validasi['nama'];
       $siswa->nisn=$validasi['nisn'];
       $siswa->no_telp=$request->no_telp;
       $siswa->jk=$validasi['jk'];
       $siswa->alamat=$validasi['alamat'];
       $siswa->lokal_id=$validasi['lokal_id'];
       $siswa->foto=$simpan_foto;
       $siswa->save();
       return redirect(route('siswa.index'));
   }

    public function show($a_id):View
    {
        $siswa=Siswa::find($a_id);
        return view('siswa.show', [
            'menu' => 'siswa',
            'title' => 'Detail Data Siswa',
            'siswa' => $siswa
        ]);
    }

    public function edit($a_id)
    {
        $data_siswa = lokal::find($a_id);
        return view('siswa.edit',
        [
                "menu" => "siswa",
                "data_siswa" => $data_siswa
        ]
        );
    }

    public function update($a_id)
    {
        $validasi=request()->validate([
            'id'  => 'required',
            'nama' => 'required',
            'nisn' => 'required',
            'no_telp' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'lokal_id' => 'required',
            'foto' => ''
        ]);

        $data_siswa = siswa::find($validasi['id']);
        $data_siswa->nama = $validasi['nama'];
        $data_siswa->nisn = $validasi['nisn'];
        $data_siswa->no_telp = $validasi['no_telp'];
        $data_siswa->jk = $validasi['nama'];
        $data_siswa->alamat = $validasi['nama'];
        $data_siswa->lokal_id = $validasi['lokal_id'];
        $data_siswa->foto = $validasi['foto'];

        return redirect()->route('siswa.index');
    }

    public function hapus($a_id)
    {
        $data_siswa = siswa::find($a_id);
        $data_siswa->delete();

        return redirect()->route('siswa.index');
    }

}
