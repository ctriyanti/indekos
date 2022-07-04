<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index(){
        return view('admin.kecamatan.index');
    }

    public function create_view(){
        return view('admin.kecamatan.create');
    }
}
