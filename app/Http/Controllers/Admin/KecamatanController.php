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
        return view('admin.kecamatan.index');
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
            return redirect()->route('index');
        } else{
            return json_encode(['status' => false, 'message' => 'Gagal tambah kecamatan']);
        }


    }
}
