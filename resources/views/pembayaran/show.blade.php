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

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Pembayaran</h3>
        </div>
        <!-- /.card-header -->


        <div class=" card-body">
            <table>
                <tr>
                    <th>user</th>
                    <td>:</td>
                    <td>{{ $data->user->name }}</td>
                </tr>
                <tr>
                    <th>spp</th>
                    <td>:</td>
                    <td>{{ $data->spp->jumblah_spp}}</td>
                </tr>
                <tr>
                    <th>Tanggal Pembayaran</th>
                    <td>:</td>
                    <td>{{ $data->tanggal_pembayaran }}</td>
                </tr>
                <tr>
                    <th>Jumblah Pembayaran</th>
                    <td>:</td>
                    <td>@money($data->jumblah_pembayaran)</td>
                </tr>
            </table>
        </div>
        <!-- /.card-body -->

    </div>
</div>
@endsection
