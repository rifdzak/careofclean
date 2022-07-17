<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/')->with('success', 'Account Berhasil di Akses!');
        }
        return redirect('/halamanlogin')->with('warning','Username/Password Tidak Sesuai!');
    }

    public function logout(Request $request){
    Auth::logout();
    return redirect('/halamanlogin')->with('success', 'Account berhasil di logout!');
    }

    public function registrasi(){
        return view('login.registrasi');
    }

    public function simpanregistrasi(Request $request){
        User::create([

        'email' => $request->email,
        'nama' => $request->nama,
        'username' => $request->username,
        'password' => bcrypt($request->password),
        'alamat'=> $request->alamat,
        'no_hp'=> $request->no_hp,
        'gender'=> $request->gender,


        ]);
        return redirect(url('/halamanlogin'))->with('success', 'Account berhasil di daftarkan!');;
    }
}
