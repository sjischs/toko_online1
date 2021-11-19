<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    Route::post("/insert_pelanggan","pelanggancontroller@store");
    Route::post("/insert_petugas","petugascontroller@store");
    Route::post("/insert_produk","produkcontroller@store");
    Route::put("/update_pelanggan/{id}","pelangganController@update");
    Route::put("/update_petugas/{id}","petugasController@update");
    Route::put("/update_produk/{id}","produkController@update");
    Route::delete("delete_siswa{id}","pelangganController@destroy"); 
    Route::delete("delete_siswa{id}","petugasController@destroy");
    Route::delete("delete_siswa{id}","produkController@destroy");                              
});
