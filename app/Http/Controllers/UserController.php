<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.index',[
            "title"=>"data user",
            "data"=>User::all()
        ]);
    }
    public function store(Request $request):RedirectResponse{
        $request->validate([
            "name"=>"required",
            "email"=>"email:dns",
            "username"=>"required",
            "password"=>"required",
        ]);
       $password=Hash::make($request->password);
       $request->merge([
        "password"=>$password
       ]);
       user::create($request->all());
       return redirect()->route('user.index')->with('success','data user berhasil ditambahkan');
    }
}