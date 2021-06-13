<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class backendUserController extends Controller
{
    public function tampilUser(){
        $user = DB::table('users')->get();
        return view('backendDaftarUser',['user'=>$user]);
    }

    public function detailUser($id){
        $user = DB::table('users')->where('id',$id)->get();
        return view('backendDetailUser',['user'=>$user]);
    }
    public function hapusUser($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('/backendUser');
    }
}
