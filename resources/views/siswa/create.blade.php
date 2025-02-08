@extends('templates.layouts')
@section('title','data kelas')
@section('konten')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Tambah data kelas
            </div>
            <div class="card-body">
                <form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col mt-2">
                        <label for="nama" class="text-gray-900">Nama </label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="col mt-2">
                        <label for="nisn" class="text-gray-900">NISN</label>
                        <input type="text" name="nisn" id="nisn" class="form-control" placeholder="Masukkan NISN" required>
                    </div>
                    <div class="col mt-2">
                        <label for="lokal_id" class="text-gray-900">Kelas</label>
                        <select name="lokal_id" id="lokal_id" class="form-control mt-2" required>
                            <option  value="">Pilih Kelas</option>
                            @foreach($kelas as $k)
                            <option value="{{$k['id']}}">{{$k['nama_kelas']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col mt-2">
                        <label for="jk" class="text-gray-900">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control mt-2" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>    
                        </select>
                    </div>
                    <div class="col mt-2">
                        <label for="alamat" class="text-gray-900">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>
                    </div>
                    <div class="col mt-2">
                        <label for="no_telp" class="text-gray-900">No Telepon</label>
                        <input type="number" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan No Telepon" required>
                    </div>
                    <div class="col mt-2">
                        <label for="foto" class="text-gray-900">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control" accept="image/*" placeholder="Masukkan Foto" required>
                    </div>

                
                    <div class="card-footer text-right">
                        <a href="{{route('siswa.index')}}">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-arrow-circle-left"></i> Kembali
                            </button>
                        </a>
                        <a href="{{route('siswa.index')}}">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
            </div>

        <div class="col">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>


@endsection