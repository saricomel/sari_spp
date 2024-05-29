@extends('layouts.template')

@section('judulh1', 'Admin - Dashboard')

@section('konten')
<div class="row">
    <div class="col-lg-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="card-title mb-0">Total Siswa</h3>
                        <p class="card-text">Jumlah siswa terdaftar</p>
                    </div>
                    <div class="display-4">500</div>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">Lihat Detail</a>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="card-title mb-0">Pembayaran Bulan Ini</h3>
                        <p class="card-text">Total pembayaran bulan ini</p>
                    </div>
                    <div class="display-4">$10,000</div>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header border-0">
        <div class="d-flex justify-content-between">
            <h3 class="card-title">Grafik Pembayaran</h3>
        </div>
    </div>
    <div class="card-body">
        <!-- Letakkan grafik di sini -->
        <div id="chart" style="height: 300px;"></div>
    </div>
</div>
@endsection

