<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Models\pelayanan;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;
use Illuminate\Support\Facades\Session;

class pelayananController extends Controller
{
    public function index(Request $request){
        $keyword = $request -> keyword;
        $pelayanan = pelayanan::where('nama','LIKE','%'.$keyword.'%')->paginate(2);
        return view('pelayanan',['pelayananList' => $pelayanan]);
    }

    public function create(){
        $pasien = pasien::select('nik','nama')->get();
        return view('pelayanan-add',['pasien'=>$pasien]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'nik' => 'unique:pelayanans|required',
            'nama' => 'required',
            'tanggalPelayanan' => 'required',
            'jenisPelayanan' => 'required',
            'jenisPasien' => 'required',
            'diagnosa' => 'required',
            'bb' => 'required',
            'tb' => 'required',
            'catatanFisik' => 'required',
            'catatanDokter' => 'required',
        ]);
       $pelayanan = pelayanan::create($request->all());
       if($pelayanan){
        Session::flash('status','success');
        Session::flash('message','Data Berhasil Ditambah');
    }
    return redirect('/pelayanan');
    }

    public function edit(Request $request, $id){
        
        $pelayanan = pelayanan::with('pasien')->findOrFail($id);
        $pasien = pasien::where('id','!=',$pelayanan->nik)->get(['nik','nama']);
        return view('pelayanan-edit',['pelayanan' => $pelayanan, 'pasien'=>$pasien]);
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tanggalPelayanan' => 'required',
            'jenisPelayanan' => 'required',
            'jenisPasien' => 'required',
            'diagnosa' => 'required',
            'bb' => 'required',
            'tb' => 'required',
            'catatanFisik' => 'required',
            'catatanDokter' => 'required',
        ]);
        $pelayanan = pelayanan::findOrFail($id);
        $pelayanan->update($request->all());
        if($pelayanan){
            Session::flash('status','success');
            Session::flash('message','Updated Data Success!');

        }
        return redirect('/pelayanan');
    }

    public function destroy($id){
        $pelayanan = pelayanan::findOrFail($id);
        $pelayanan->delete();

        if($pelayanan){
            Session::flash('status','success');
            Session::flash('message','Data Terhapus');
        }
        return redirect('/pelayanan');
    }
}
