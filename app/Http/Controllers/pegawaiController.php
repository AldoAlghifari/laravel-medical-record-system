<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pegawaiController extends Controller
{
    public function index(Request $request){
        $keyword = $request -> keyword;
        $pegawai = pegawai::where('nama','LIKE','%'.$keyword.'%')->paginate(2);
        return view('pegawai',['pegawaiList' => $pegawai]);
    }

    public function create(){
        return view('/pegawai-add');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'nip' => 'unique:pegawais|required',
            'nama' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'noHp' => 'required',
        ]);

        $pegawai = pegawai::create($request->all());
        if($pegawai){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Ditambah');
        }
        return redirect('/pegawai');
    }

    public function edit(Request $request, $id){
        $pegawai = pegawai::findOrFail($id);
        return view('pegawai-edit',['pegawai'=>$pegawai]);
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'noHp' => 'required',
        ]);

        $pegawai = pegawai::findOrFail($id);
        $pegawai->update($request->all());
        if($pegawai){
            Session::flash('status','success');
            Session::flash('message','Ubah Data Sukses');
        }
        return redirect('/pegawai');
    }

    public function destroy($id){
        $pegawai = pegawai::findOrFail($id);
        $pegawai->delete();

        if($pegawai){
            Session::flash('status','success');
            Session::flash('message','Hapus Data Sukses');
        }
        return redirect('/pegawai');
    }
}
