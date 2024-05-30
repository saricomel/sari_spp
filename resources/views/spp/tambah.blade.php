@extends('layouts.template')
@section('judulh1','Admin - spp')

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
            <h3 class="card-title">Tambah Data spp</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('spp.store') }}" method="POST">
            @csrf

            <div class=" card-body">
                <div class="form-group">
                    <label>siswa</label>
                    <select class="form-control" name="siswa_id">
                        @foreach($data as $dt )
                        <option value="{{ $dt->id }}">{{ $dt->nama_siswa }}</option>
                        @endforeach
                    </select>
                    <label for="bulan" class="form-label">bulan</label>
                    <select class="form-control" name="bulan">
                        <option hidden>--Pilih bulzn--</option>
                        <option value="1">januari</option>
                        <option value="2">februari</option>
                        <option value="3">maret</option>
                        <option value="4">april</option>
                        <option value="5">mei</option>
                        <option value="6">juni</option>
                        <option value="7">juli</option>
                        <option value="8">agustus</option>
                        <option value="9">september</option>
                        <option value="10">oktober</option>
                        <option value="11">november</option>
                        <option value="12">desember</option>
                    </select><br>
                <div class="form-group">
                    <label for="tahun">tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="tahun">
                </div>
                <div class="form-group">
                    <label for="jumblah_spp">Jumblah Spp</label>
                    <input type="number" class="form-control" id="jumblah_spp" name="jumblah_spp" placeholder="jumblah_spp">
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
