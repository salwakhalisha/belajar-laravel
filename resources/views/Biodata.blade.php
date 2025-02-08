
@extends('templates.layouts')

@section('title','Halaman Biodata')
@section('css')
<style>
    h6{
        color:green
        
    };
</style>
<link href="{{asset('dist/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
    @section('konten')
<!-- DataTales Example -->
 <br>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Group</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Biodata as $b)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$b['nama']}}</td>
                                        <td>{{$b['kelas']}}</td>
                                    </tr>
                                    @endforeach
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