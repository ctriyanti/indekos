<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Kos;
use App\Models\Owner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KosController extends Controller
{
    public function index(){
        $kos = Kos::with('owner')->with('kecamatan')->get();
        return view('admin.kos.index', compact('kos'));
    }

    public function create_view(){
        $owners = Owner::all();
        $kecamatans = Kecamatan::all();
        return view('admin.kos.create', compact('owners', 'kecamatans'));
    }

    public function submit(Request $request) {
        $validation = Validator::make($request->all(), [
            'pemilik_kos' => 'required',
            'kacamatan' => 'required',
            'harga' => 'required',
            'nama_kos' => 'required',
            'alamat' => 'required',
        ]);
        if ($validation->fails()) {
            // return json_encode(['status' => false, 'message' => $validation->messages()]);
        }

        if ($request->foto_kos != null) {
            $extention = $request->foto_kos->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/kos/" . $file_name;
            $request->foto_kos->storeAs('public/kos', $file_name);
            $foto_kos = $txt;
        } else{
            $foto_kos = null;
        }

        $kos = Kos::create([
            'kecamatan_id' => $request->kecamatan_id,
            'nama_kos' => $request->nama_kos,
            'foto_utama' => $foto_kos,
            'url_map' => $request->url_map,
            'owner_id' => $request->pemilik_kos,
            'harga' => $request->harga,
            'jenis_sewa'=> $request->jenis_sewa,
            'status' => $request->status,
            'created_by' => 'admin',
            'updated_by' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if($kos){
            return redirect()->route('indexKos');
        } else{
            return json_encode(['status' => false, 'message' => 'Gagal tambah kos!']);
        }
    }

    public function edit_view($id){
        $owners = Owner::all();
        $kecamatans = Kecamatan::all();
        $kos = Kos::with('owner')->with('kecamatan')->where('id', $id)->first();
        return view('admin.kos.edit', compact('kos', 'owners', 'kecamatans'));
    }

    public function update(Request $request) {
        $data = Kos::findOrFail($request->id);

        if ($request->foto_kos != null) {
            $extention = $request->foto_kos->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/kos/" . $file_name;
            $request->foto_kos->storeAs('public/kos', $file_name);
            $foto = $txt;
        } else{
            $foto = $data->foto_utama;
        }
        if($data){
            $data->kecamatan_id = $request->kecamatan_id;
            $data->foto_utama = $foto;
            $data->nama_kos = $request->nama_kos;
            $data->url_map = $request->url_map;
            $data->owner_id = $request->pemilik_kos;
            $data->harga = $request->harga;
            $data->jenis_sewa = $request->jenis_sewa;
            $data->status = $request->status;
            $data->updated_by = 'admin';
            $data->updated_at = Carbon::now();
            $data->save();

            return redirect()->route('indexKos');
        } else{
            return json_encode(['status' => false, 'message' => 'Gagal ubah kos']);
        }
    }

    public function delete(Request $request) {
        $id = $request->id;
        $kos = Kos::findOrFail($id);
        $kos->delete();
        return redirect()->route('indexKos');
    }
}
