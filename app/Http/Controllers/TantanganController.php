<?php

namespace App\Http\Controllers;

use App\Models\Tantangan;
use Illuminate\Http\Request;

class TantanganController extends Controller
{
    // responses
    public function success($data, $message = 'Success'){
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    public function error($message = 'Terjadi kesalahan'){
        return response()->json([
            'code' => 400,
            'message' => $message
        ], 400); 
    }

    public function index(){
        $tantangans = Tantangan::get();
        return $this->success($tantangans);
    }

    public function show($id) {
        $tantangan = Tantangan::where('materi_id', $id)->get();
        return $this->success($tantangan);
    }

}
