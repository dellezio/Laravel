<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;

class AController extends Controller
{
    public function index()
    {
        $data= Exam::all();
        return view('uts.index',['data'=> $data]);
    }

    public function create(Request $request)
    {
      Exam::create($request->all());
      return redirect('/kelompoka/index')->with('sukses','Data Berhasil  Diinput');
    }

    public function delete($id_a)
    {
        $data_d= Exam::find($id_a);
        $data_d->delete($data_d);
        return redirect('/kelompoka/index')->with('sukses','Data Berhasil  Di Hapus');
    }

    

}
