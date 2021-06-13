<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nik' => ['required', 'string', 'max:20', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            /*'tempat' => ['required'],
            'pekerjaan' => ['required'],
            'agama' => ['required'],
            'kecamatan' => ['required'],
            'status' => ['required'],
            'tanggal' => ['required'],
            'alamat' => ['required'],*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $file = file($data['foto']);
        //$nama_file = "profile_pict".$data['nik']."_".$file->getClientOriginalName();
        //$tujuan_upload = "profile_pict";
        //$file->move($tujuan_upload,$nama_file);
        return User::create([
            'nik' => $data['nik'],
            'name' => $data['name'],
            'email' => $data['email'],
            'jenis_kelamin'=> $data['jenis'],
            'kelurahan/desa' => $data['kelurahan'],
            'password' => Hash::make($data['password']),
            'tempat_lahir' => $data['tempat'],
            'tanggal_lahir' => $data['tanggal'],
            'agama' => $data['agama'],
            'kecamatan' => $data['kecamatan'],
            'status_perkawinan' => $data['status'],
            'pekerjaan' => $data['pekerjaan'],
            'alamat' => $data['alamat'],
           //'Foto' =>$nama_file,
        ]);
        
         


    }
}
