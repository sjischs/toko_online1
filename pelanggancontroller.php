<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\pelangganmodel;
use Illuminate\support\facades\validator;
class pelanggancontroller extends Controller
{
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'nama'=>'required',
            'alamat'=>'required',
            'telp'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save = kelasModel::create([
            'nama'    =>$req->nama,
            'alamat'=>$req->alamat,
            'telp'=>$req->telp,
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }

}