<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\petugasmodel;
use Illuminate\support\facades\validator;
class petugascontroller extends Controller
{
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'nama_petugas'=>'required',
            'username'=>'required',
            'password'=>'required',
            'level'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save = kelasModel::create([
            'nama_petugas'    =>$req->nama_petugas,
            'username'=>$req->username,
            'password'=>$req->password,
            'level'=>$req->level,
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }
}
