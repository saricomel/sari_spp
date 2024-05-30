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

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data spp</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('spp.update',$spp->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label>Siswa</label>
                    <select class="form-control" name="siswa_id">
                        @foreach($data_siswa as $ds )
                        <option value="{{ $ds->id }}" @if($ds->id===$spp->siswa_id) selected
                            @endif>{{ $ds->nama_siswa }}
                        </option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <input type="text" class="form-control" id="bulan" name="bulan" placeholder="bulan" value="{{ $spp->bulan }}">
                    </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="tahun" value="{{$spp->tahun}}">
                </div>
                <div class="form-group">
                    <label for="jumblah_spp">Jumblah Spp</label>
                    <input type="number" class="form-control" id="jumblah_spp" name="jumblah_spp" placeholder="jumblah_spp" value="{{$spp->jumblah_spp}}">
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
