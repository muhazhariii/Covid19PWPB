<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$data['barangs'] = DB::table('barangs')->get();
        $data2['berita'] = DB::table('berita')->get();
        
    	return view('admin.index', $data, $data2 );
    }

    public function tambahbarang(Request $request){

    	$rule = [
            'nama_barang' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'keterangan' => 'required',
            'gambar' => 'required',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        // unset($input['_token']);
        // $status = \DB::table('barangs')->insert($input);

        $barang = new \App\barang;
        $barang->nama_barang = $input['nama_barang'];
        $barang->harga = $input['harga'];
        $barang->stok = $input['stok'];
        $barang->keterangan = $input['keterangan'];
        $barang->gambar = $input['gambar'];
        $status = $barang->save();

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('uploads/', $request->file('gambar')->getClientOriginalName());
            $barang->gambar = $request->file('gambar')->getClientOriginalName();
            $barang->save();
          }

        if ($status) {
            return redirect('/admin')->with('success','Data Berhasil Ditambahkan');
        } else {
            return redirect('/admin/tambah')->with('error', 'Data Gagal Ditambahkan');
        }

    }

    public function editbarang($id){
    	$data['barangs'] = \DB::table('barangs')->find($id);
        return view('admin.edit', $data);
    }

    public function updatebarang(Request $request,$id){
    	$rule = [
            'nama_barang' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'keterangan' => 'required',
            'gambar' => 'required',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        // unset($input['_token']);
        // $status = \DB::table('barangs')->insert($input);

        $barang = \App\barang::find($id);
        $barang->nama_barang = $input['nama_barang'];
        $barang->harga = $input['harga'];
        $barang->stok = $input['stok'];
        $barang->keterangan = $input['keterangan'];
        $barang->gambar = $input['gambar'];
        $status = $barang->save();

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('uploads/', $request->file('gambar')->getClientOriginalName());
            $barang->gambar = $request->file('gambar')->getClientOriginalName();
            $barang->save();
          }

        if ($status) {
            return redirect('/admin')->with('success','Data Berhasil Diupdate');
        } else {
            return redirect('/siswa/{id}/edit')->with('error', 'Data Gagal Diupdate');
        }
    }

    public function hapusbarang(Request $request, $id){
    	 $status = \DB::table('barangs')->where('id', $id)->delete();

    	 if ($status) {
            return redirect('/admin')->with('success','Data Berhasil Dihapus');
        } else {
            return redirect('/admin')->with('error', 'Data Gagal Dihapus');
        }
    }



    //data Berita

    public function createberita(){
    	return view('create.formBerita');
    }
    public function storeberita(Request $request){
    	$rule =[
    		'judul' => 'required|string',
    		'deskripsi' => 'required|string',
    		'foto' => 'required'
    	];

    	$this->validate($request, $rule);

    	$input = $request->all();
    	// unset($input['_token']);

		// $status = \DB::table('berita')->insert($input);

		// $status = \App\Berita::create($input);

		$berita = new \App\Berita;
		$berita->judul = $input['judul'];
		$berita->deskripsi = $input['deskripsi'];
		$berita->foto = $input['foto'];
		$status = $berita->save();

		if ($request->hasFile('foto')) {
		  	$request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
		  	$berita->foto = $request->file('foto')->getClientOriginalName();
		  	$berita->save();
		  }  


		if ($status) {
			return redirect('/admin')->with('success', 'Data Berhasil Ditambahkan');
		}else{
			return redirect('/admin')->with('error', 'Data gagal Ditambahkan');
		}	
    }

    public function editberita(Request $request, $id){
    	$data['berita'] = \DB::table('berita')->find($id);
    	return view('create.formBerita', $data);
    }
    public function updateberita(Request $request, $id){
    	$rule =[
    		'judul' => 'required|string',
    		'deskripsi' => 'required|string',
    		'foto' => 'required'
    	];

    	$this->validate($request, $rule);

    	$input = $request->all();
    	// unset($input['_token']);
    	// unset($input['_method']);

    	// $status = \DB::table('berita')->where('id', $id)->update($input);

    	$berita = \App\Berita::find($id);
    	// $status = $berita->update($input);
    	$berita->judul = $input['judul'];
		$berita->deskripsi = $input['deskripsi'];
		$berita->foto = $input['foto'];
		$status = $berita->save(); 

		if ($request->hasFile('foto')) {
		  	$request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
		  	$berita->foto = $request->file('foto')->getClientOriginalName();
		  	$berita->save();
		  }  

		if ($status) {
			return redirect('/admin')->with('success', 'Data Berhasil Diubah');
		}else{
			return redirect('/admin/berita/$id/edit')->with('error', 'Data gagal Diubah');
		}	
    }

    public function hapusberita(Request $request, $id){
         $status = \DB::table('berita')->where('id', $id)->delete();

         if ($status) {
            return redirect('/admin')->with('success','Data Berhasil Dihapus');
        } else {
            return redirect('/admin')->with('error', 'Data Gagal Dihapus');
        }
    }

    public function detail($id)
    {
        $berita = \DB::table('berita')->where('id', $id)->first();

        return view('create.index', compact('berita'));
    }
}
