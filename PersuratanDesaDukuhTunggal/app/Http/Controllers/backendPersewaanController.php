<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class backendPersewaanController extends Controller
{
    public function tampilPersewaan(){
        $persewaan = DB::table('detail_persewaan')->get();
        return view ('backendDaftarPersewaan',['persewaan'=>$persewaan]);
    }
    public function detailPersewaan($id){
        $persewaan = DB::table('detail_persewaan')->where('id',$id)->get();
        return view ('backendDetailPersewaan',['persewaan'=>$persewaan]);
    }
    public function hapusPersewaan($id){
        DB::table('detail_persewaan')->where('id',$id)->delete();
        return redirect('/backendPersewaan');
    }

    public function tambahPersewaan(){
        return view('backendTambahPersewaan');
    }

    public function PostPersewaan(Request $request){
        $luas = $request->lebar * $request->panjang;
        DB::table('detail_persewaan')->insert([
            'alamat' => $request->alamat,
            'panjang' => $request->panjang,
            'lebar'=>$request->lebar,
            'luas'=>$luas,
            'nik' => $request->nik,
            'harga'=>$request->harga,
            'foto'=>$request->foto
        ]);
        return redirect('/backendPersewaan');
    }
    
}
