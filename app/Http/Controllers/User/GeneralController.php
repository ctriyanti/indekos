<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kos;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
    public function index(){
        $kos = Kos::with('kecamatan')->with('owner')->where('status', 'active')->inRandomOrder()->limit(9)->get();
        return view('landingPage.index', compact('kos'));
    }

    public function submit_message(Request $request) {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        if ($validation->fails()) {
            return json_encode(['status' => false, 'message' => 'Lengkapi semua form!']);
        }

        $message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        if($message){
            return redirect()->route('home');
        }
        return json_encode(['status' => false, 'message' => 'Gagal memberikan pesan!']);
    }

    public function admin_pesan() {
        $pesan = Message::all();
        return view('admin.pesan.index', compact('pesan'));
    }

    public function set_testimoni(Request $request) {
        $id = $request->id;
        $pesan = Message::findOrFail($id);
        $pesan->delete();

        return redirect()->route('adminPesan');
    }
}
