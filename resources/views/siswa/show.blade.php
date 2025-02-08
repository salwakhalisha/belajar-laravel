
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
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$siswa->nama}}</td>
                                </tr>
                                <tr>
                                    <td>NISN</td>
                                    <td>:</td>
                                    <td>{{$siswa->nisn}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{$siswa->alamat}}</td>
                                </tr>
                                <tr>
                                    <td>No Handphone</td>
                                    <td>:</td>
                                    <td>{{$siswa->no_telp}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Kelas</td>
                                    <td>:</td>
                                    <td>{{$siswa->lokal->nama_kelas}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{$siswa->jk}}</td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td>:</td>
                                    <td><img src="{{asset('storage/'.$siswa->foto)}}" alt="" width="100px"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
    @endsection
@section('script')
<script src="{{asset('dist/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dist/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('dist/js/demo/datatables-demo.js')}}"></script>
@endsection