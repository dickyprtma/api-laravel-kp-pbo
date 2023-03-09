<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller {
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
        $soals = Soal::get();
        return $this->success($soals);
    }

    public function show($id) {
        $soals = Soal::where('tantangan_id', $id)->get();
        return $this->success($soals);
    }
}
