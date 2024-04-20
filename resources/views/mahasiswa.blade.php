@extends('layouts.layout')

@section('title')
List Mahasiswa
@endsection

@section('content')

<div class="container py-5">
    <h1 class="mb-3">List Mahasiswa</h1>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($mahasiswas as $mahasiswa)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/storage/images/' . $mahasiswa->foto ) }}" class="card-img-top" alt="{{ $mahasiswa->nama }}'s Photo">
                <div class="card-body">
                    <h5 class="card-title">{{ $mahasiswa->nama }}</h5>
                    <!-- <p class="card-text"></p> -->
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">NIM : {{ $mahasiswa->NIM }}</li>
                    <li class="list-group-item">JURUSAN : {{ $mahasiswa->jurusan }}</li>
                    <li class="list-group-item">EMAIL : {{ $mahasiswa->email }}</li>
                    <li class="list-group-item">Nomor HP: {{ $mahasiswa->nohp }}</li>
                </ul>
                <div class="card-body">
                    <a href="#">Card link</a>
                    <a href="/mahasiswa/{{ $mahasiswa->NIM }}" class="card-link">Show</a>
                    <a href="/mahasiswa/{{ $mahasiswa->NIM }}/edit" class="card-link">Edit</a>
                    <form action="/mahasiswa/{{ $mahasiswa->NIM }}" class="d-inline-block" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ? Menghapus {{ $mahasiswa->nama }}  ')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection