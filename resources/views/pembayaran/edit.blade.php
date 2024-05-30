<!-- resources/views/pembayaran/edit.blade.php -->

@extends('layouts.template')

@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $pembayaran->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="spp_id">SPP</label>
            <select name="spp_id" id="spp_id" class="form-control">
                @foreach($spp as $s)
                    <option value="{{ $s->id }}" {{ $pembayaran->spp_id == $s->id ? 'selected' : '' }}>{{ $s->tahun }} - {{ $s->nominal }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tanggal_pembayaran">Tanggal Pembayaran</label>
            <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" class="form-control" value="{{ $pembayaran->tanggal_pembayaran }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
            <input type="number" name="jumlah_pembayaran" id="jumlah_pembayaran" class="form-control" value="{{ $pembayaran->jumlah_pembayaran }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Ubah Pembayaran</button>
    </form>
@endsection
