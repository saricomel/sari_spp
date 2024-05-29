@extends('layouts.template')
@section('judulh1','Admin - siswa')

@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah Data siswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf

            <div class=" card-body">
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="nama_siswa">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select class="form-control" name="kela_id">
                        @foreach($data as $dt )
                        <option value="{{ $dt->id }}">{{ $dt->nama_kelas }}</option>
                        @endforeach
                    </select>
         
                <div class="form-group">
                    <label for="nis">Nis</label>
                    <input type="number" class="form-control" id="nis" name="nis" placeholder="nis">
                </div>
           
                <label for="jenis_kelamin" class="form-label">jenis kelamin</label>
                      <select class="form-control" name="jenis_kelamin">
                          <option hidden>--Pilih jenis kelamin--</option>
                          <option value="pria">pria</option>
                          <option value="wanita">wanita</option>
                      </select><br>
          
                <div class="form-group">
                    <label for="no_telpon">No Telpon</label>
                    <input type="number" class="form-control" id="no_telpon" name="no_telpon" placeholder="no_telpon">
                </div>
          
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
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
