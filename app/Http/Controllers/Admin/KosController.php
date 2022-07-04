<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kos;
use Illuminate\Http\Request;

class KosController extends Controller
{
    public function index(){
        $kos = Kos::with('owner')->with('kecamatan')->get();
        dd($kos);
        return view('admin.kos.index', compact('kos'));
    }
}
