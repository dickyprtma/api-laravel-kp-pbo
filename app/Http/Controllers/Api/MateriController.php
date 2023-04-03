<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class MateriController extends Controller
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
        $users = Materi::get();
        return $this->success($users);
    }

 
    public function create()
    {
    }

 
    public function store(Request $request){

    }

    public function show($id)
    {
        $materi = Materi::where('id', $id)->first();
        return $this->success($materi);
    }


    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {
    }

    public function tambahExp(Request $request, $id){
        $user = Siswa::where('id', $id)->first();
        if($user){
            $user->update($request->all());
            return $this->success($user);
        }
        return $this->error("User tidak ditemukan");
    }

    public function updateCoin(Request $request, $id){
        $user = Siswa::where('id', $id)->first();
        if($user){
            $user->update($request->all());
            return $this->success($user);
        }
        return $this->error("User tidak ditemukan");
    }
}
