<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class backendHomeController extends Controller
{
    public function tampil(){
        return view('backendHome');
    }
    public function tampil1(){
        return view('index1');
    }
    public function tampilTemplate(){
        return view('backendTemplate');
    }
}
