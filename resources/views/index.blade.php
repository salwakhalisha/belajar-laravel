@extends('templates.layouts')

@section('title','Halaman Index')
@section('css')
<style>
    p{
        color:blue
    }
    
    h1{
        color:grey
    };
</style>
@endsection
@section('konten')
<br>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
            <h1 class="h3 mb-2 mt5 ">Halaman Index</h1>
            </div>
            <div class="card-body">
            <p>Dear lord when i go to heaven </p>
            </div>
        </div>
    </div>
</div>
<br>

@endsection
@section('script')
<script>
    alert('Belajar Laravel Itu Mudah Bukan?');
</script>
@endsection