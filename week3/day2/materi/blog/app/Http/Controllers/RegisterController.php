<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function form() {
        return view('form');
    }

    public function sapa(Request $request) {
        // var_dump($request);
        // dd($request["Nama"]);
        // dd($request["Alamat"]);
        return "Halo !!";
    }

    public function sapa_dong(Request $request) {
        // dd($request->all());
        $nama = $request["Nama"];
        return $nama;
    }
}
