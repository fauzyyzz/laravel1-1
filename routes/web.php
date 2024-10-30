<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\JenisController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

route::get('barang',[barangController::class,'index']);
route::get('/barang/tambah',[barangController::class,'create']);
route::post('/barang/simpan',[barangController::class,'store']);
route::get('/barang/{id}/show',[barangController::class,'show']);
route::post('/barang/{id}/update',[barangController::class,'update']);
route::get('/barang/{id}/destroy',[barangController::class,'destroy']);

route::get('jenis',[JenisController::class,'index']);
route::get('/jenis/tambah',[JenisController::class,'create']);
route::post('/jenis/simpan',[JenisController::class,'store']);
route::get('/jenis/{id}/show',[JenisController::class,'show']);
route::post('/jenis/{id}/update',[JenisController::class,'update']);

