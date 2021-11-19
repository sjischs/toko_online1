<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\produkmodel;
use Illuminate\support\facades\validator;
class produkcontroller extends Controller
{
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'nama'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save = kelasModel::create([
            'nama'    =>$req->nama,
            'deskripsi'=>$req->deskripsi,
            'harga'=>$req->harga,
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }
}
