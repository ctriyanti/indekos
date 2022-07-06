<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kos;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        $kos = Kos::with('kecamatan')->where('status', 'active')->inRandomOrder()->limit(9)->get();
        return view('landingPage.index', compact('kos'));
    }
}
