<?php

namespace App\Http\Controllers\API;

use App\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{
    
    public function index()
    {
        return Exam::all();
   
    }

  
    public function store(Request $request)
    {
    //  return Exam::create(request()->all());
        $validasi = Validator::make($request->all(),[
            "judul_43"=>"required",
            "abstrak_43"=>"required"
        ]);
    if ($validasi->passes()) {
        return response()->json([
        'pesan' => "Data Berhasil disimpan",
        'data' => Exam::create(request()->all())
    ]);
    }

    return response()->json([
        'pesan' => 'Data Gagal Ditambahkan',
        'data' => $validasi->errors()->all()
    ], 200);


    }

    public function show($data)
    {
        $detail = Exam::where('id_a', $data)->first();

        if(empty($detail)){
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        }

        return response()->json([
            'pesan' => 'Data Berhasil ditemukan',
            'data' => $detail
        ], 200);
    }

    public function destroy($data)
    {
        $detail = Exam::where('id_a', $data)->first();

        if(empty($detail)){
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        }

        $detail->delete();
        return response()->json([
            'pesan' => 'Data Berhasil Dihapus',
            'data' => $detail
        ], 200);
    }
   
    public function update(Request $request, $data)
    {
        $data = Exam::where('id_a', $data)->first();

        if(empty($detail)){
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        }
        else{
            $validasi = Validator::make($request->all(),[
                "judul_43"=>"required",
                "abstrak_43"=>"required"
            ]);

            if ($validasi->passes()) {
                return response()->json([
                'pesan' => "Data Berhasil disimpan",
                'data' => $data->update(request()->all())
            ]);
            }
    
            return response()->json([
                'pesan' => 'Data Gagal DiUpdate',
                'data' => $validasi->errors()->all()
            ],); 
        }

       
        }

    // public function create(Request $request)
    // {
        
    // }

   
    public function edit($id)
    {
        //
    }

    
    

    
    
}