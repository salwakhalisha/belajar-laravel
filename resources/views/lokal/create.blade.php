@extends('Templates.layouts')

@section('title', 'Halaman latihan')

@section('konten')
<br>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">Tambah Data Kelas</div>
            <div class="card-body">
                <form action="{{ route('lokal.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Nama Kelas" required>
                    </div>
                    <div class="form-group">
                        <label for="wali_kelas">Wali Kelas</label>
                        <input type="text" class="form-control" id="wali_kelas" name="wali_kelas" placeholder="Masukkan Wali Kelas" required>
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