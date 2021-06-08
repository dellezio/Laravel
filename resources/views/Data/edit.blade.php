@extends('template')

@section('title', 'Edit Siswa')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/siswa">Siswa</a>
        </li>
        
      </ul>
      
    </div>
  </nav>

@endsection

@section('isibody')
    <div class="container">
        <h1>Edit Data Siswa</h1>
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <form action="/siswa/{{$siswa->id}}/update" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Depan</label>
                        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Masukan Nama Depan" value="{{$siswa->nama_depan}}">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Belakang</label>
                        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Masukan Nama Belakang" value="{{$siswa->nama_belakang}}">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="L" @if($siswa->jenis_kelamin=='L') selected @endif>Laki-Laki</option>
                            <option value="P" @if($siswa->jenis_kelamin=='P') selected @endif>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input name="agama" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$siswa->alamat}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>

    </div>
@endsection
