<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OwnerController extends Controller
{
    public function index(){
        $owner = Owner::all();
        return view('admin.owner.index', compact('owner'));
    }

    public function create_view(){
        return view('admin.owner.create');
    }

    public function submit(Request $request){
        $validation = Validator::make($request->all(), [
            'nama' => 'required',
            'no_hp' => 'required',
            'no_ktp' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ]);

        if ($validation->fails()) {
            // return json_encode(['status' => false, 'message' => $validation->messages()]);
        }

        if ($request->foto != null) {
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/owners/" . $file_name;
            $request->foto->storeAs('public/owners', $file_name);
            $foto = $txt;
        }

        $owner = Owner::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'no_ktp' => $request->no_ktp,
            'alamat' => $request->alamat,
            'foto' => $foto,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if($owner){
            return redirect()->route('indexOwner');
        } else{
            return json_encode(['status' => false, 'message' => 'Gagal tambah pemilik kos!']);
        }
    }

    public function edit_view($id) {
        $owner = Owner::findOrFail($id);
        return view('admin.owner.edit', compact('owner'));
    }

    public function update(Request $request) {
        $data = Owner::findOrFail($request->id);

        if ($request->foto != null) {
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/owners/" . $file_name;
            $request->foto->storeAs('public/owners', $file_name);
            $foto = $txt;
        }
        if($data){
            $data->nama = $request->nama;
            $data->no_ktp = $request->no_ktp;
            $data->no_hp = $request->no_hp;
            $data->alamat = $request->alamat;
            $data->foto = $request->foto == null ? 'test' : $foto;
            $data->updated_at = Carbon::now();
            $data->save();

            return redirect()->route('indexOwner');
        } else{
            return json_encode(['status' => false, 'message' => 'Gagal ubah pemilik kos']);
        }
    }

    public function delete(Request $request) {
        $id = $request->id;
        $owner = Owner::findOrFail($id);
        $owner->delete();
        return redirect()->route('indexOwner');
    }
}
