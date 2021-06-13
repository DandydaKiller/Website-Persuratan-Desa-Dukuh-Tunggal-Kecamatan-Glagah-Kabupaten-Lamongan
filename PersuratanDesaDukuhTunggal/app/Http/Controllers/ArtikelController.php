<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ArtikelController extends Controller
{
    //
    public function index(){
        $artikel = DB::table('artikel')->join('jenis_artikel','artikel.id_kategori','=','jenis_artikel.id_jenis')->get();

        return view('index',['artikel'=> $artikel]);
    }

    public function detail($id){
        $artikelDetail = DB::table('artikel')->join('jenis_artikel','artikel.id_kategori','=','jenis_artikel.id_jenis')->where('id',$id)->get();
        $artikel = DB::table('artikel')->join('jenis_artikel','artikel.id_kategori','=','jenis_artikel.id_jenis')->get();
        return view('show-artikel',['artikel'=> $artikel],['artikelDetail'=> $artikelDetail]);
    }

    public function sewa(){
        $sewa = DB::table('detail_persewaan')->get();
        return view('informasi-sewa',['sewa'=>$sewa]);
    }

    public function show_sewa($id){
        $sewa = DB::table('detail_persewaan')->where('id',$id)->get();
        return view('show-persewaan',['sewa' => $sewa]);
    }

    public function cari(Request $request){
        $cari = $request->cari;
 
        $user = DB::table('users')->where('name','like',"%".$cari."%")->paginate();
        return view('cari-penduduk-find',['user' => $user]);
     }
    
}
