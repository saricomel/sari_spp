<?php

namespace App\Http\Controllers;

use App\Models\Kela;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class KelasController extends Controller
{
    //

    public function index()
    {
        // $siswa=Kela::find(1)->siswas;
        // dd($siswa);
        return view('kelas.index', ["title" => "Kelas", "data" => Kela::all()]);

    }

    public function create(): View
    {
        return view('kelas.tambah')->with(["title" => "Tambah Data Kelas"]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "nama_kelas" => "required",
            "kompetensi_keahlian" => "required", 
        ]);

        Kela::create($request->all());
        return redirect()->route('kela.index')->with('success', 'Data Kelas Berhasil Ditambahkan');
    }

    public function edit($id):View
    {
        $kelas=Kela::find($id);
        return view('kelas.edit',compact('kelas'))->with(["title" => "Ubah Data Customer"]);
    }

    public function update(Request $request):RedirectResponse
    {
        $request->validate([
            "id"=>"required",
            "nama_kelas" => "required",
            "kompetensi_keahlian" => "required",
        ]);
        
        $kelas=Kela::find($request->id);
        $kelas->nama_kelas=$request->nama_kelas;
        $kelas->kompetensi_keahlian=$request->kompetensi_keahlian;
        $kelas->save();

        return redirect()->route('kela.index')->with('update', 'Data Kelas Berhasil Diubah');
    }
    public function destroy($id){
        kela::where('id',$id)->Delete();
        return redirect()->route(('kela.index'))->with('success', 'kelas berhasil dihapus');;
    }
}
