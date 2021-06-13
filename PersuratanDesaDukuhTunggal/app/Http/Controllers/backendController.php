<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class backendController extends Controller
{
    public function tampilPengajuanSurat()
    {
    	$suratPengantar = DB::table('surat_pengantar')->get();
        return view('backendSuratPengantar',['suratPengantar' => $suratPengantar]);
    }

    public function tampilPengajuanSuratDetail($id){
        $suratPengantar = DB::table('surat_pengantar')->where('id',$id)->get();
        return view('backendDetailSuratPengantar',['suratPengantar'=>$suratPengantar]);
    }

    //update status selesai
    public function updateStatusSelesai(Request $request)
    {
    	DB::table('surat_pengantar')->where('id',$request->id)->update([
            'status' => 'Selesai',
            'keterangan' => 'Surat selesai silakan diambil di Kantor desa'
    	]);
    	return redirect('/backendPengajuanSurat');
    }

    //update status ditolak :)
    public function updateStatusDitolak(Request $request)
    {
        if ( $request->keterangan == '') {
            $temp = 'Data tidak sesuai';   
        }
    	DB::table('surat_pengantar')->where('id',$request->id)->update([
            'status' => 'Surat Ditolak',
            'keterangan' => $temp
    	]);
    	return redirect('/backendPengajuanSurat');
    }
}
