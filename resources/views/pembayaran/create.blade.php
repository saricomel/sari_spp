@extends('layouts.template')
@section('judulh1','Admin - pembayaran')

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
            <h3 class="card-title">Tambah Data pembayaran</h3>
        </div>
        <!-- /.card-header -->
<!-- form start -->
<form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf
    <div class=" card-body">
    <div class="form-group"><label for="user_id">User</label>
        <select name="user_id" id="user_id" class="form-control">
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group"><label for="spp_id">SPP</label>
        <select name="spp_id" id="spp_id" class="form-control">
            @foreach($spp as $s)
            <option value="{{ $s->id }}">{{ $s->tahun }} - {{ $s->nominal }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="tanggal_pembayaran">Tanggal Pembayaran</label>
        <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jumblah_pembayaran">Jumlah Pembayaran</label>
        <input type="number" name="jumblah_pembayaran" id="jumblah_pembayaran" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Pembayaran</button>
</form>
</div>
</div>
@endsection
