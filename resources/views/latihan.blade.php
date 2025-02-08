@extends('templates.layouts')

@section('title','Halaman Latihan')


@section('css')
<style>
    
    h1{
        color:grey
    };
</style>
@endsection
<link href="{{asset('dist/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@section('konten')
<br>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">Halaman Latihan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Nama Materi</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$judul}}</td>
                                        <td>{{$materi}}</td>
                                        <td>{{$tanggal}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection
@section('script')
<script src="{{asset('dist/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dist/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('dist/js/demo/datatables-demo.js')}}"></script>
@endsection