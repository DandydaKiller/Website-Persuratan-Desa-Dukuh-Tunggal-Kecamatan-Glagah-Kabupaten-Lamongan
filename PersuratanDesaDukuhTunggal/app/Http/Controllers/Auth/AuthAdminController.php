<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin;
use Auth;

class AuthAdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function login(){
        return view('logina');
    }

    public function register(){
        return view('registera');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:199',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed'
        ]);
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->intended(route('admin.dashboard'));
        //return redirect('/homea');
    }
    
    public function cek(Request $request){
        $this->validate($request, [
            'email' => 'email|exists:admins,email',
            'password' => 'required',
        ]);
        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password],$request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
        /*$attempts = [
           $username = 'email' => $request->email,
            $password  = 'password' => $request->password,
        ];
        /*if (Auth::attempt($attempts, (bool) $request->remember)) {
            return redirect()->intended('/homed');
        }*/
        /*$user_count = DB::table('drivers')
        ->where('email',$request->email)
        ->where('password',$request->password)
        ->count();
        if($user_count > 0){
            return redirect()->intended('/homed');
        }
        return redirect()->back();*/
    }
}
