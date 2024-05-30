<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\User;
use App\Models\Spp;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PembayaranController extends Controller
{
    // Menampilkan daftar pembayaran
    public function index(): View
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', ["title" => "Pembayaran", "data" => $pembayaran]);
    }

    // Menampilkan form untuk menambahkan pembayaran baru
    public function create(): View
    {
        $users = User::all();
        $spp = Spp::all();

        return view('pembayaran.create')->with([
            "title" => "Tambah Pembayaran",
            "users" => $users,
            "spp" => $spp,
        ]);
    }

    // Menyimpan pembayaran baru ke database
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "user_id" => "required",
            "spp_id" => "required",
            "tanggal_pembayaran" => "required|date",
            "jumblah_pembayaran" => "required",
        ]);

        Pembayaran::create($request->all());
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran Berhasil Ditambahkan');
    }

    // Menampilkan form untuk mengedit pembayaran
    public function edit(Pembayaran $pembayaran): View
    {
        $users = User::all();
        $spp = Spp::all();

        return view('pembayaran.edit', compact('pembayaran'))->with([
            "title" => "Ubah Pembayaran",
            "users" => $users,
            "spp" => $spp,
        ]);
    }

    // Memperbarui data pembayaran di database
    public function update(Pembayaran $pembayaran, Request $request): RedirectResponse
    {
        $request->validate([
            "user_id" => "required",
            "spp_id" => "required",
            "tanggal_pembayaran" => "required|date",
            "jumblah_pembayaran" => "required|numeric"
        ]);

        $pembayaran->update($request->all());
        return redirect()->route('pembayaran.index')->with('update', 'Pembayaran Berhasil Diubah');
    }

    // Menampilkan detail pembayaran
    public function show($id): View
    {

        $Pembayaran=Pembayaran::find($id);
        return view('Pembayaran.show')->with([
            "title" => "Tampil Data Produk",
            "data"=>$Pembayaran
        ]);
    }

    // Menghapus pembayaran dari database
    public function destroy($id){
        pembayaran::where('id',$id)->Delete();
        return redirect()->route(('pembayaran.index'))->with('success', 'siswa berhasil dihapus');;
    }
}
