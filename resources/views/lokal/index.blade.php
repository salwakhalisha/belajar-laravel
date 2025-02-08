@extends('templates.layouts')

@section('title','Data Kelas')
<link href="{{asset('dist/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@section('konten')
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3>Manajemen Data Kelas</h3>
                
                <div class="text-right">
                <a href="{{route('lokal.create')}}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah Data Kelas</a>
                </div>

            </div>
            <div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kelas</th>
                                            <th>wali kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Group</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                    @foreach ($data_kelas as $dt)
                                    <tr>
                                        <td class='text-center'>{{$loop->iteration}}</td>
                                        <td class='text-center'>{{$dt['nama_kelas']}}</td>
                                        <td class='text-center'>{{$dt['wali_kelas']}}</td>
                                        <td class='text-center'>
                                            <form action="{{route('lokal.hapus',$dt['id'])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-circle" title="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                                <a href="{{route('lokal.edit',$dt['id'])}}" class="btn btn-info btn-circle" title="edit">
                                                    <i class="fas fa-pen"></i>
                                                </a>
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