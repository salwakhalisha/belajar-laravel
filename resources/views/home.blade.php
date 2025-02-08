@extends('templates.layouts')

@section('title','Halaman Home')
@section('konten')
@section('css')
<style>
    h5{
        color:black
    }
    
    h2{
        color:green
    }
    ol{
        color:black
    }
    
</style>
@endsection
<br>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
            <h2>Ini adalah halaman home 👩🏻‍💻</h2>
            </div>
            <div class="card-body">
            <h5>
                Selamat Datang {{$nama}}, anda berada di kelas {{$kelas}},
                anda tinggal di {{$alamat}}
            </h5>

            <h5>
                Bias {{$nama}} adalah :
            </h5>
            <ol>
                @foreach($bias as $bi)
                <li>{{$bi}}</li>
                @endforeach
            </ol>
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