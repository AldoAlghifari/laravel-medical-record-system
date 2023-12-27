<?php

namespace App\Http\Controllers;

use App\Models\pelayanan;
use App\Models\pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pembayaranController extends Controller
{
    public function index(Request $request){
        $keyword = $request -> keyword;
        $pembayaran = pembayaran::where('nama','LIKE','%'.$keyword.'%')->paginate(2);
        return view('pembayaran',['pembayaranList' => $pembayaran]);
    }

    public function create(){
        $pelayanan = pelayanan::select('id','nama')->get();
        return view('pembayaran-add',['pelayanan'=>$pelayanan]);
    }

    public function store(Request $request){
        $validate = $request->validate([
           
            'nama' => 'unique:pembayarans|required',
            'tanggalPembayaran' => 'required',
            'metodeBayar' => 'required',
            'nomorKartu' => 'required',
            'totalTagihan' => 'required',
            'jumlahDibayar' => 'required',
            'sisaTagihan' => 'required',
            
        ]);
        $pembayaran = pembayaran::create($request->all());
        if($pembayaran){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Ditambah');
        }
        return redirect('/pembayaran');
        
    }
    public function edit(Request $request, $id){
        
        $pembayaran = pembayaran::with('pelayanan')->findOrFail($id);
        $pelayanan = pelayanan::where('id','!=',$pembayaran->nik)->get(['id','nama']);
        return view('pembayaran-edit',['pembayaran' => $pembayaran, 'pelayanan'=>$pelayanan]);
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            
            'nama' => 'required',
            'tanggalPembayaran' => 'required',
            'metodeBayar' => 'required',
            'nomorKartu' => 'required',
            'totalTagihan' => 'required',
            'jumlahDibayar' => 'required',
            'sisaTagihan' => 'required',
            
        ]);
        $pembayaran = pembayaran::findOrFail($id);
        $pembayaran->update($request->all());
        if($pembayaran){
            Session::flash('status','success');
            Session::flash('message','Updated Data Success!');

        }
        return redirect('/pembayaran');
    }

    public function destroy($id){
        $pembayaran = pembayaran::findOrFail($id);
        $pembayaran->delete();

        if($pembayaran){
            Session::flash('status','success');
            Session::flash('message','Data Terhapus');
        }
        return redirect('/pembayaran');
    }
}
