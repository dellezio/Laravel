@extends('main')

@section('title', 'Data Ujian') 

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://127.0.0.1:8000/myprofile">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/ujian">Data Ujian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="http://127.0.0.1:8000/input">Input Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection
    
@section('isibody')

<h1>CRUD Web Service</h1>
  <table class="table">
    <thead class="thead-dark">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama MataKuliah</th>
        <th scope="col">Dosen</th>
        <th scope="col">Jumlah Soal</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($ujian as $uji)
         <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$uji->nama_mk}}</td>
        <td>{{$uji->dosen}}</td>
        <td>{{$uji->jumlah_soal}}</td>
        <td>{{$uji->keterangan}}</td>
        <td>{{$uji->created_at}}</td>
        <td>{{$uji->updated_at}}</td>
      </tr>  
      @endforeach
    </tbody>
  </table>
    
@endsection