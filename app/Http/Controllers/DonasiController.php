<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\donasi;
use Auth;
use Alert;
use Carbon\Carbon;

class DonasiController extends Controller
{
    public function index(){
    	$data['donasi'] = \App\donasi::OrderBy('id')->get();
    	return view('home', $data);
    }
    public function create(){
    	return view('create.formDonasi');
    }
    public function store(Request $request){
    	$rule =[
    		'nama' => 'required|string',
    		'nominal' => 'required|integer',
    		'foto' => ''
    	];

    	$this->validate($request, $rule);
    	$input = $request->all();
    	$tanggal = Carbon::now();

    	$donasi = new \App\donasi;
        // $donasi->user_id = Auth::user()->id;
		$donasi->nama = $input['nama'];
		$donasi->email = $input['email'];
		$donasi->nohp = $input['nohp'];
		$donasi->pembayaran = $input['pembayaran'];
		$donasi->tanggal = $tanggal;
		$donasi->nominal = $input['nominal'];
		$donasi->total_nominal = 0;
		$status = $donasi->save();

    	if ($request->hasFile('foto')) {
		  	$request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
		  	$donasi->foto = $request->file('foto')->getClientOriginalName();
		  	$donasi->save();
		  }  

        // $donasi = donasi::where('user_id', Auth::user()->id)->where('status',0)->first();
        // $donasi->terkumpul = $donasi->terkumpul+$donasi->nominal*$request->terkumpul;
        // $status = $donasi->update();


    	if ($status) {
    		return redirect('/home')->with('success', 'Data berhasil ditambahkan');
    	}else{
    		return redirect('/donasi/create')->with('error', 'Data gagal ditambahkan');
    	}
    }
    public function destroy(Request $request, $id){
    	$donasi = \App\donasi::find($id);
    	$status = $donasi->delete();

    	if ($status) {
    		return redirect('/home')->with('success', 'Data berhasil dihapus');
    	}else{
    		return redirect('/donasi/create')->with('error', 'Data gagal dihapus');
    	}
	}
}