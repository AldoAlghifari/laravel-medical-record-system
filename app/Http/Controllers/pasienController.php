<?php

namespace App\Http\Controllers;

use id;
use App\Models\pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pasienController extends Controller
{
    public function index(Request $request){
        $keyword = $request -> keyword;
        $pasien = pasien::where('nama','LIKE','%'.$keyword.'%')->paginate(2);
        return view('pasien',['pasienList' => $pasien]);
    }

    public function create(){
        return view('pasien-add');

    }

    public function store(Request $request){
        $validate = $request->validate([
            'nik' => 'unique:pasiens|required',
            'nama' => 'required',
            'tanggalLahir' => 'required',
            'umur' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
            'noKk' => 'required',
            'namaOrtu' => 'required',
            'golDarah' => 'required',
            'noHp' => 'required',
        ]);

        $pasien = pasien::create($request->all());
        if($pasien){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Ditambah');
        }
        return redirect('/pasien');
    }

    public function edit(Request $request, $id){
        $pasien = pasien::findOrFail($id);
        return view('pasien-edit',['pasien'=>$pasien]);
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tanggalLahir' => 'required',
            'umur' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
            'noKk' => 'required',
            'namaOrtu' => 'required',
            'golDarah' => 'required',
            'noHp' => 'required',
        ]);
        $pasien = pasien::findOrFail($id);
        $pasien->update($request->all());
        if($pasien){
            Session::flash('status','success');
            Session::flash('message','Ubah Data Sukses');
        }
        return redirect('/pasien');
    }

    public function destroy($id){
        $pasien = pasien::findOrFail($id);
        $pasien->delete();

        if($pasien){
            Session::flash('status','success');
            Session::flash('message','Hapus Data Sukses');
        }
        return redirect('/pasien');
    }
}
