<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataKeluargaController extends Controller
{
    public function index()
    { 
        $datakeluarga = DB::table('data_pribadi_karyawan')
                            ->join('data_keluarga','data_pribadi_karyawan.id','=','data_keluarga.id_karyawan')
                            ->get();
        // dd($datakeluarga);
        return view('datakeluarga',['datakeluarga' => $datakeluarga]);

    }
}
