<?php

namespace App\Http\Controllers;

use App\Models\Kela;
use App\Models\siswa;
use Illuminate\Http\Request;
use illuminate\View\View;
use illuminate\Http\RedirectResponse;

class SiswaController extends Controller
{
    //

    public function index()
{
    // $siswa=siswa::all();
    // dd($siswa);
    return view('siswa.index', ["title" => "siswa", "data" => siswa::all()]);
}

public function create():View
{
    return view('siswa.tambah')->with([
        "title" => "Tambah Data siswa",
        "data"=>Kela::all()
    ]);
}

public function store(Request $request): RedirectResponse
{
    $request->validate([
    "nama_siswa"=>"required", 
    "kela_id"=>"required", 
    "nis"=>"required", 
    "jenis_kelamin"=>"required", 
    "no_telpon"=>"required", 
    "alamat"=>"required"
]);

    siswa::create($request->all());
    return redirect()->route('siswa.index')->with('success','Data siswa Berhasil Ditambahkan');
}
public function edit(siswa $siswa):View
{
    return view('siswa.edit',compact('siswa'))->with([
        "title" => "Ubah Data siswa",
        "data_kelas"=>Kela::all()
    ]);
}
public function update (Request $request, siswa $siswa):RedirectResponse
{
    $request->validate(["nama_siswa"=>"required", "kela_id"=>"required", "nis"=>"required", "jenis_kelamin"=>"required", "no_telpon"=>"required", "alamat"=>"required"]);
    $siswa->update($request->all());

    return redirect()->route('siswa.index')->with('update','Data siswa Berhasil Diubah');
}
public function destroy($id){
    siswa::where('id',$id)->Delete();
    return redirect()->route(('siswa.index'))->with('success', 'siswa berhasil dihapus');;
}
}
