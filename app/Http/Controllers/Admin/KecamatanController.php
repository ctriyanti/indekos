<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KecamatanController extends Controller
{
    public function index(){
        $kecamatan = Kecamatan::all();
        return view('admin.kecamatan.index', compact('kecamatan'));
    }

    public function create_view(){
        return view('admin.kecamatan.create');
    }

    public function submit(Request $request) {
        $validation = Validator::make($request->all(), [
            'kecamatan' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($validation->fails()) {
            return json_encode(['status' => false, 'message' => $validation->messages()]);
        }

        $kecamatan = Kecamatan::create([
            'kecamatan' => $request->kecamatan,
            'description' => $request->deskripsi,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'created_by' => 'admin',
            'updated_by' => 'admin'
        ]);
        if($kecamatan){
            return redirect()->route('indexKecamatan');
        } else{
            return json_encode(['status' => false, 'message' => 'Gagal tambah kecamatan']);
        }
    }

    public function edit_view($id){
        $kecamatan = Kecamatan::findOrFail($id);
        return view('admin.kecamatan.edit', compact('kecamatan'));
    }

    public function delete(Request $request) {
        $id = $request->id;
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect()->route('indexKecamatan');
    }
}
