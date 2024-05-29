@extends('layouts.template')
@section('judulh1','Admin - Siswa')

@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Terdapat beberapa masalah dengan input Anda.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Siswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('siswa.update',$siswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="nama_siswa" value="{{ $siswa->nama_siswa }}">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select class="form-control" name="kela_id">
                        @foreach($data_kelas as $dk )
                        <option value="{{ $dk->id }}" @if($dk->id===$siswa->kela_id) selected
                            @endif>{{ $dk->nama_kelas }}
                        </option>
                        @endforeach
                    </select>
         
                <div class="form-group">
                    <label for="nis">Nis</label>
                    <input type="number" class="form-control" id="nis" name="nis" placeholder="nis" value="{{ $siswa->nis }}">
                </div>
           
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}">
                </div>
          
                <div class="form-group">
                    <label for="no_telpon">No Telpon</label>
                    <input type="text" class="form-control" id="no_telpon" name="no_telpon" placeholder="no_telpon" value="{{ $siswa->no_telpon }}">
                </div>
          
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="{{ $siswa->alamat }}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
