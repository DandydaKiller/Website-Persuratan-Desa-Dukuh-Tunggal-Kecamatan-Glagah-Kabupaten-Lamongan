<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class SuratController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('surat');
    }

    public function store(Request $request){
        $this->validate($request,[
            'jenis' => 'required',
           //'file' => 'required',
         ]);
        //tanya caca atau teman - teman file apa yang akan di upload

        $file = $request->file('file1');
        $nama_file = "surat_pengantar".time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'berkas_pengajuan';
        $file->move($tujuan_upload,$nama_file);

        DB::table('surat_pengantar')->insert([
            'id_jenis_pengantar'=> $request->jenis,
            'NIK' => Auth::user()->nik,
            'File' => $nama_file
        ]);
        //update file buku nikah setelah insert di atas (insert file kk), get last inserted id untuk update tabel upload buku nikah tapi belum bisa kalau kepepet pakai uniqe dari nama file sebelumnya(file kk) dan id user yang mengajukan
        if($request->jenis == 5){
            $file2 = $request->file('file2');
            $nama_file2 = "surat_pengantar".time()."_".$file2->getClientOriginalName();
            $tujuan_upload2 = 'berkas_pengajuan';
            $file2->move($tujuan_upload2,$nama_file2);
            DB::table('surat_pengantar')->where('NIK',Auth::user()->nik)->where('id_jenis_pengantar',5)->where('File',$nama_file)->update(array('File2'=>$nama_file2));
        }else if($request->jenis == 3){
            DB::table('surat_pengantar')->where('NIK',Auth::user()->nik)->where('id_jenis_pengantar',3)->where('File',$nama_file)->update(['nama'=>$request->nama_kk],['nik_kk'=>$request->nik_kk],['tempat_lahir'=>$request->tempat_lahir],['tanggal_lahir'=>$request->tanggal],['alamat'=>$request->alamat_kk],['jenis_kelamin'=>$request->jenis_kk],['nama_orangtua'=>$request->namaortu_kk],['ketrangan_kk'=>$request->keterangan_kk]);
        }else if($request->jenis == 6){
            DB::table('surat_pengantar')->where('NIK',Auth::user()->nik)->where('id_jenis_pengantar',6)->where('File',$nama_file)->update(['nama'=>$request->nama_kk],['nik_kk'=>$request->nik_kk],['tempat_lahir'=>$request->tempat_lahir],['tanggal_lahir'=>$request->tanggal],['alamat'=>$request->alamat_kk],['jenis_kelamin'=>$request->jenis_kk],['nama_orangtua'=>$request->namaortu_kk],['ketrangan_kk'=>$request->keterangan_kk]);
        }
        //sementara, harus di ganti
        //$surat = DB::table('surat_pengantar')->where('NIK',Auth::user()->nik)->get();

        //return view('show-surat',['surat' => $surat]);
        return redirect('/list-surat-view');
    }

    public function detailsurat($id){
        $surat = DB::table('surat_pengantar')->join('jenis_surat','surat_pengantar.id_jenis_pengantar','=','jenis_surat.id_jenis')->where('surat_pengantar.id_pengantar',$id)->get();
        $admin = DB::table('surat_pengantar')->join('admins','surat_pengantar.id_admin','=','admins.id')->where('surat_pengantar.id_pengantar',$id)->get();
        return view('show-surat',['surat'=>$surat],['admin'=>$admin]);
    }

    public function deletesurat($id){
        DB::table('surat_pengantar')->where('id_pengantar',$id)->delete();
        return redirect('/list-surat-view');
    }

    public function showlist(){
        $list = DB::table('surat_pengantar')->join('jenis_surat','surat_pengantar.id_jenis_pengantar','=','jenis_surat.id_jenis')->where('surat_pengantar.NIK',Auth::user()->nik)->get();
        return view('list_surat',['list'=>$list]);
    }
}
