@extends('layouts.template')

@section('judulh1', 'Admin - Kelas')

@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Terdapat beberapa masalah dengan inputan Anda.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Kelas</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('kela.store') }}" method="POST">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Nama Kelas">
                </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                    <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" placeholder="Nama Kelas">
                </div> 
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
