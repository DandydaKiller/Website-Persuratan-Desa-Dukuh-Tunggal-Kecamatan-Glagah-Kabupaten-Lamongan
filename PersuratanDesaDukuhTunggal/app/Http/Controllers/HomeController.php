<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
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

     
    public function index()
    {
        //cari cara buat count nya
        $nikah = DB::table('surat_pengantar')->where('id_jenis_pengantar',1)->where('NIK',Auth::user()->nik)->get();
        return view('home',['nikah' => $nikah]);
    }

    public function edit_profile(Request $request){
        if($request->file('foto') != null){
            $file = $request->file('foto');
            $nama_file = Auth::User()->id."profile_pict".time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'profile_pict';
            $file->move($tujuan_upload,$nama_file); 

            
            DB::table('users')->where('id',Auth::User()->id)->update([
                'Foto' => $nama_file
                
            ]);

        }if($request->email != null){
            DB::table('users')->where('id',Auth::User()->id)->update([
                'email' => $request->email

            ]);
        }
        if($request->nomor != null){
            DB::table('users')->where('id',Auth::User()->id)->update([
                'no_tlp' => $request->nomor

            ]);
        }if($request->perkawinan != null){
            DB::table('users')->where('id',Auth::User()->id)->update([
                'status_perkawinan' => $request->perkawinan,
            ]);

        }

        if($request->password_lama != null && $request->password_baru != null && $request->password_baru_konfirmasi != null){
            if($request->password_baru == $request->password_baru_konfirmasi){
                DB::table('users')->where('id',Auth::User()->id)->update([
                    'password' => Hash::make($request->password_baru),
                ]);
                return redirect('/home');
            }else{
                return redirect('/edit-profile');
            }
           
        }else{
            return redirect('/edit-profile');
        }
       


        return redirect('/home');
    }
}
