<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\spp;
use Illuminate\Http\Request;
use illuminate\View\View;
use illuminate\Http\RedirectResponse;

class sppController extends Controller
{
    //

    public function index()
{
    return view('spp.index', ["title" => "spp", "data" => spp::all()]);
}

public function create():View
{
    return view('spp.tambah')->with([
        "title" => "Tambah Data spp",
        "data"=>siswa::all()
    ]);
}

public function store(Request $request): RedirectResponse
{
    $request->validate([
    "siswa_id"=>"required", 
    "bulan"=>"required", 
    "tahun"=>"required", 
    "jumblah_spp"=>"required"
]);

    spp::create($request->all());
    return redirect()->route('spp.index')->with('success','Data spp Berhasil Ditambahkan');
}
public function edit(spp $spp):View
{
    return view('spp.edit',compact('spp'))->with([
        "title" => "Ubah Data spp",
        "data_siswa"=>siswa::all()
    ]);
}
public function update (Request $request, spp $spp):RedirectResponse
{
    $request->validate(["siswa_id"=>"required", "bulan"=>"required", "tahun"=>"required", "jumblah_spp"=>"required"]);
    $spp->update($request->all());

    return redirect()->route('spp.index')->with('update','Data spp Berhasil Diubah');
}
public function destroy($id){
    siswa::where('id',$id)->Delete();
    return redirect()->route(('spp.index'))->with('success', 'spp berhasil dihapus');;
}

}
