@extends('templates.layouts')

@section('title','Data Kelas')
<link href="{{asset('dist/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@section('konten')
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
                
                <div class="text-right">
                <a href="{{route('siswa.create')}}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah Data Siswa</a>
                </div>

            </div>
            <div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>NISN</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data_siswa as $ds)
                                    <tr>
                                        <td class='text-center'>{{$loop->iteration}}</td>
                                        <td class='text-center'>{{$ds['nama']}}</td>
                                        <td class='text-center'>{{$ds['nisn']}}</td>
                                        <td class='text-center'>{{$ds['alamat']}}</td>
                                        <td class='text-center'>{{$ds['no_telp']}}</td>
                                        <td class='text-center'>{{$ds->lokal->nama_kelas}}</td>
                                        <td class='text-center'>
                                                <a href="{{route('siswa.show',$ds->id)}}" class="btn btn-primary btn-circle" title="lihat">
                                                    <i class="fas fa-user"></i>
                                                </a>
        
                                                <a href="{{route('siswa.edit',$ds['id'])}}" class="btn btn-info btn-circle" title="edit">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                
                                            <form action="{{route('siswa.hapus',$ds['id'])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-circle" title="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>

                                                
                                            
                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('dist/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dist/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('dist/js/demo/datatables-demo.js')}}"></script>
@endsection