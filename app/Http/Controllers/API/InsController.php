<?php

namespace App\Http\Controllers\API;


use App\Institution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InsController extends Controller
{
    public function index()
    {
        return Institution::all();
   
    }

    public function store(Request $request)
    {
    //  return Institution::create(request()->all());
        $validasi = Validator::make($request->all(),[
            "name"=>"required",
            "description"=>"required",
            
        ]);
    if ($validasi->passes()) {
        return response()->json([
        'pesan' => "Data Berhasil disimpan",
        'data' => Institution::create(request()->all())
    ]);
    }

    return response()->json([
        'pesan' => 'Data Gagal Ditambahkan',
        'data' => $validasi->errors()->all()
    ], 200);


    }

    public function show($id)
    {
        $detail = Institution::where('id', $id)->first();

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

    public function destroy($id)
    {
        $detail = Institution::where('id', $id)->first();

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


    public function update(Request $request, $id)
    {
        $data = Institution::where('id', $id)->first();

        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        } else {

            $validasi = Validator::make($request->all(), [
                "name" => "required",
                "description" => "required",
             
            ]);

            if ($validasi->passes()) {
                return response()->json([
                    'pesan' => "Data Berhasil disimpan",
                    'data' => $data->update($request->all())
                ]);
            } else {
                return response()->json([
                    'pesan' => 'Data Gagal di Update',
                    'data' => $validasi->errors()->all()
                ], 404);
            }
        }

       
        }
}
