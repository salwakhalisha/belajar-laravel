@extends('Templates.layouts')

@section('title', 'Halaman latihan')

@section('konten')
<br>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">Edit Data Kelas</div>
            <div class="card-body">
                <form action="{{ route('lokal.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $data_kelas->id }}">
                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Nama Kelas" value="{{ $data_kelas->nama_kelas }}" required> 
                    </div>
                    <div class="form-group">
                        <label for="wali_kelas">Wali Kelas</label>
                        <input type="text" class="form-control" id="wali_kelas" name="wali_kelas" placeholder="Masukkan Wali Kelas" value="{{ $data_kelas->wali_kelas }}" required>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer text-right">
                        <a href="{{ route('lokal.index') }}">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-arrow-circle-left"></i> Kembali
                            </button>
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-check"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection