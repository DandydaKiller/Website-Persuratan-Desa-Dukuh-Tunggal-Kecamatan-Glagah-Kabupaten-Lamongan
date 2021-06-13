<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class backendArtikelController extends Controller
{
    public function tampilArtikel()
    {
    	$artikel = DB::table('artikel')->get();
        return view('backendDaftarArtikel',['artikel' => $artikel]);
    }

    public function tulisArtikel(){
        return view('backendTambahArtikel');
    }

    public function postArtikel(Request $request){
        DB::table('artikel')->insert([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategori'=>$request->kategori,
            'status'=>$request->status
        ]);
        return redirect('/backendArtikel');
    }

    public function editArtikel($id){
        $editArtikel = DB::table('artikel')->where('id',$id)->get();
        return view('backendEditArtikel',['editArtikel'=>$editArtikel]);
    }
    
    public function editPostArtikel(Request $request){
        
        DB::table('artikel')->insert([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategori'=>$request->kategori,
            'status'=>$request->status
        ]);
        return redirect('/backendArtikel');
    }

    public function hapusArtikel($id){
        DB::table('artikel')->where('id',$id)->delete();
        return redirect('/backendArtikel');
    }
}
