<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    
    public function index()
    {
        $data_siswa= student::all();
        return view('Data.index',['data_siswa'=> $data_siswa]);
    }

    
    public function create(Request $request)
    {
      student::create($request->all());
      return redirect('/siswa')->with('sukses','Data Berhasil  Diinput');
    }

    public function update(Request $request,$id)
    {
        $siswa=student::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses','Data Berhasil  Di Update');
    }

    public function edit($id)
    {
       $siswa= student::find($id);
       return view('Data/edit',['siswa'=>$siswa]);
    }

    public function delete($id)
    {
        $siswa= student::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses','Data Berhasil  Di Hapus');
    }

    public function home()
    {
        $data_siswa= student::all();
        return view('Data.home',['data_siswa'=> $data_siswa]);
    }
    
    public function store(Request $request)
    {
        //
    }

   
    public function show(student $student)
    {
        //
    }

}
