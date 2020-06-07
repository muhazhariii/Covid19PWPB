<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\barang;
use App\Berita;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function toko(){        
        $barangs = barang::paginate(20);
        return view('toko', compact('barangs'));
    }

    public function indexberita(){
        $berita = berita::paginate(255);
        return view('berita', compact('berita'));
    }

    public function index(){
        return view('home');
    }

    public function korona(){
        $suspects = Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json();
        return view('korona', compact('suspects'));
    }
    
}
