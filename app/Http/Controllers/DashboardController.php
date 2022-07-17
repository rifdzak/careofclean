<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function Dashboard_view(){
        $tb_pickup = DB::table('tb_pickup')->get();
        return view('pickup.dashboard', ['tb_pickup' => $tb_pickup]);
    }

    public function infoview(){
        return view('info');
    }

    public function tambahpickup(){
        return view('pickup.tambah');
    }
    public function simpanpickup(Request $request){
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('foto');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

        Pickup::create([
            'pembayaran' => $request->pembayaran,
            'jenis_sampah' => $request->jenis_sampah,
            'berat_sampah' => $request->berat_sampah,
            'alamat' => $request->alamat,
            'foto' => $nama_file,
        ]);

        return redirect(url('/'))->with('success', 'Data Berhasil Ditambahkan!!');
    }
    public function editpickup($id){
        $data = DB::table('tb_pickup')->where('id',$id)->first();
        return view('pickup.edit',compact('data'));
    }

    public function simpaneditpickup(Request $request){

        if($request->foto == null){
            $nama_file = $request->fotolama;
        }else{
           // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('foto');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        }

        $dataedit = Pickup::whereId($request->id)->first();
        $dataedit->pembayaran = $request->pembayaran;
        $dataedit->jenis_sampah = $request->jenis_sampah;
        $dataedit->berat_sampah = $request->berat_sampah;
        $dataedit->alamat = $request->alamat;
        $dataedit->foto = $nama_file;
        $dataedit->save();

        return redirect(url('/'))->with('success', 'Data Berhasil Disimpan!');
    }
    public function deletepickup($id){
        DB::table('tb_pickup')->where('id',$id)->delete();
        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus!!');
    }

}
