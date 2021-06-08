@extends('template')

@section('title', 'Siswa')

@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                {{ session('sukses') }}
            </div>
        @endif

        <div class="row">
            <div class="col-6">
                <h1>Data</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                    data-target="#exampleModal">
                    Tambah Data
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="/kelompoka/create" method="POST">
                                    {{ csrf_field() }}


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input name="judul_43" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Masukan Judul">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Abstrak</label>
                                        <input name="abstrak_43" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Masukan Abstrak">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-sm table-hover table-bordered  text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Judul</th>
                        <th>Abstrak </th>
                        <th>Aksi </th>

                    </tr>
                </thead>
                @foreach ($data as $dt)
                    <tr>
                        <td>{{ $dt->judul_43 }}</td>
                        <td>{{ $dt->abstrak_43 }}</td>

                        <td>
                            <a href="/kelompoka/{{ $dt->id_a }}/delete" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin Ingin Di Hapus ?')">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

    <div class="card text-center">
        <div class="card-header">

        </div>
        <div class="card-body">
            <h5 class="card-title">copyright</h5>
            <p class="card-text">By ShiroNeko</p>
        </div>
        <div class="card-footer text-muted">
            Cheers
        </div>
    </div>
@endsection
