@extends('templates.layouts')

@section('title','Halaman siswa')
@section('konten')
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3>Detail Data Siswa</h3>

            </div>
            <div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>NISN</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class='text-center'>{{$siswa->nama}}</td>
                                        <td class='text-center'>{{$siswa->nisn}}</td>
                                        <td class='text-center'>{{$siswa->alamat}}</td>
                                        <td class='text-center'>{{$siswa->no_telp}}</td>
                                        <td class='text-center'>{{$siswa->lokal->nama_kelas}}</td>
                                        <td class='text-center'>{{$siswa->jk}}</td>
                                        <td class='text-center'><img src="{{asset('storage/'.$siswa->foto)}}" alt="" width="100px"></td>
                                    </tr>
                                    </tbody>
                                </table>
                                
                                    <a href="{{ route('siswa.index') }}">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-arrow-circle-left"></i> Kembali
                                        </button>
                                    </a>
                                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
