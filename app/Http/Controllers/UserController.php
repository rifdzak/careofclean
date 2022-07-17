<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listuser(){
        $this->authorize('akses_listuser' , User::class );
        $users = DB::table('users')->get();
        return view('admin.listuser' , ['users' => $users]);
    }
    public function tambahuser(){
        $this->authorize('akses_listuser' , User::class );
        return view('admin.tambahuser');
    }
    public function simpanuser(Request $request){
        $this->authorize('akses_listuser' , User::class );
        User::create([
        'email' => $request->email,
        'nama'=> $request->nama,
        'username'=> $request->username,
        'password'=> bcrypt($request->password),
        'alamat'=> $request->alamat,
        'no_hp'=> $request->no_hp,
        'gender'=> $request->gender,

        ]);

        return redirect(route('listuser'))->with('success', 'Data Berhasil Ditambahkan!!');
    }
    public function deleteuser($id){
        $this->authorize('akses_listuser' , User::class );
        DB::table('users')->where('id',$id)->delete();
        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus!!');
    }
    public function edituser($id){
        $this->authorize('akses_listuser' , User::class );
        $data = DB::table('users')->where('id',$id)->first();
        return view('admin.edituser',compact('data'));
    }

    public function simpanedituser(Request $request){
        $this->authorize('akses_listuser' , User::class );


        $dataedit = User::whereId($request->id)->first();
        $dataedit->nama = $request->nama;
        $dataedit->username = $request->username;
        if( $request->password == null){
            $dataedit->password = $request->passwordlama;
        }else if($request->passwordlama == $request->password){
            $dataedit->password = $request->passwordlama;
        }else{
            $dataedit->password = bcrypt($request->password);
        }
        $dataedit->email = $request->email;
        $dataedit->alamat = $request->alamat;
        $dataedit->no_hp = $request->no_hp;
        $dataedit->gender = $request->gender;
        $dataedit->save();

        return redirect(route('listuser'))->with('success', 'Data berhasil diubah!');
    }
}
