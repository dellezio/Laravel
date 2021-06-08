@extends('template')

@section('title', 'Home')

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
       @if (session('sukses'))
       <div class="alert alert-success" role="alert">
        {{session('sukses')}}
       </div>
       @endif
      
        <div class="row">
            <div class="col-6">
                <h1>Seluruh Data Siswa</h1>
            </div>
            

            <table class="table table-sm table-hover table-bordered text-center">
               <thead class="thead-dark">
                <tr>
                    <th>NAMA DEPAN</th>
                    <th>NAMA BELAKANG </th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>ALAMAT</th>
                  
                </tr>
               </thead>
                @foreach ($data_siswa as $siswa)
                    <tr>
                        <td>{{ $siswa->nama_depan }}</td>
                        <td>{{ $siswa->nama_belakang }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ $siswa->agama }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection
