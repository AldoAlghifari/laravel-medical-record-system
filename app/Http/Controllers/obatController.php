<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class obatController extends Controller
{
    public function index(Request $request){
        $keyword = $request -> keyword;
        $obat = obat::where('nama','LIKE','%'.$keyword.'%')->paginate(2);
        return view('obat',['obatList' => $obat]);
    }
    public function create(){
        return view('obat-add');

    }

    public function store(Request $request){
        $validate = $request->validate([
            'kodeObat' => 'unique:obats|required',
            'nama' => 'required',
            'jenisObat' => 'required',
            'tanggalMasuk' => 'required',
            'pengirim' => 'required',
            'penerima' => 'required',
            'catatan' => 'required',
            
        ]);

        $obat = obat::create($request->all());
        if($obat){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Ditambah');
        }
        return redirect('/obat');
    }

    public function edit(Request $request, $id){
        $obat = obat::findOrFail($id);
        return view('obat-edit',['obat'=>$obat]);
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'kodeObat' => 'required',
            'nama' => 'required',
            'jenisObat' => 'required',
            'tanggalMasuk' => 'required',
            'pengirim' => 'required',
            'penerima' => 'required',
            'catatan' => 'required',
        ]);
        $obat = obat::findOrFail($id);
        $obat->update($request->all());
        if($obat){
            Session::flash('status','success');
            Session::flash('message','Ubah Data Sukses');
        }
        return redirect('/obat');
    }

    public function destroy($id){
        $obat = obat::findOrFail($id);
        $obat->delete();

        if($obat){
            Session::flash('status','success');
            Session::flash('message','Hapus Data Sukses');
        }
        return redirect('/obat');
    }
}
