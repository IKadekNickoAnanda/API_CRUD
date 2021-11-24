<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApikelompokModel;

class ApikelompokController extends Controller
{
    public function create(request $req)
    {
        $data = new ApikelompokModel;
        $data->id_kp      = $req->id_kp;
        $data->nama_kelompokpenjual = $req->nama_kelompokpenjual;

        if($data->save()){
            $res['status'] = true;
            $res['message'] = 'Data berhasil disimpan';
            $res['data'] = $data;
            return $res;
        }else{
            $res['status'] = false;
            $res['message'] = 'Data gagal disimpan';
            $res['data'] = $data;
            return $res;
        }
    }

    public function get()
    {
        $data = ApikelompokModel::all();
        
        if(count($data) == 0 ){
            $res['status'] = false;
            $res['message'] = 'Data tidak ditemukan.';
            $res['data'] = $data;
            return $res;
        }else{
            $res['status'] = true;
            $res['message'] = 'Data ditemukan';
            $res['data'] = $data;
            return $res;
        }
    }

    public function update(Request $req, $id_kelompokpenjual)
    {
        $id_kp                = $req->id_kp;
        $nama_kelompokpenjual = $req->nama_kelompokpenjual;

        $data = ApikelompokModel::find($id_kelompokpenjual);
        if(count($data) == 0){
            $res['status'] = false;
            $res['message'] = 'Data tidak ditemukan.';
            $res['data'] = $data;
            return $res;
        }else if ($data->save()){
            $res['status'] = true;
            $res['message'] = 'Data berhasil diupdate.';
            $res['data'] = $data;
            return $res;
        }else{
            $res['status'] = false;
            $res['message'] = 'Data gagal diupdate.';
            $res['data'] = $data;
            return $res;
        }

    }

    public function delete($id_kelompokpenjual)
    {
        $data = ApikelompokModel::find($id_kelompokpenjual);
        if(count($data) == 0){
            $res['status'] = false;
            $res['message'] = 'Data tidak ditemukan.';
            $res['data'] = $data;
            return $res;
        }else if($data->delete()){
            $res['status'] = false;
            $res['message'] = 'Data berhasil dihapus.';
            $res['data'] = $data;
            return $res;
        }else{
            $res['status'] = false;
            $res['message'] = 'Data gagal dihapus.';
            $res['data'] = $data;
            return $res;
        }

    }
}
    

