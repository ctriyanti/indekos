<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Kos;
use Illuminate\Http\Request;

class KosController extends Controller
{
    public function index(){
        $kos = Kos::with('owner')->with('kecamatan')->where('status', 'active')->get();
        $kecamatan = Kecamatan::where('status', 'active')->get();
        return view('landingPage.kos.index', compact('kecamatan', 'kos'));
    }

    public function findKos(Request $request) {
        dd("test find kos!");
    }
}
