@extends('layouts.layout2')

@section('title')
Edit Mahasiswa - {{ $mahasiswa->nama }}
@endsection

@section('content')

<div class="container py-5">
        <h1>Edit data</h1>
        <form action="/mahasiswa/{{ $mahasiswa->NIM }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
            <div class="mb-3">
                <label for="NIM" class="form-label">Nim</label>
                <input type="number" class="form-control" name="NIM"
                     id="NIM" placeholder="12*******" value="{{ $mahasiswa->NIM }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Mahasiswa"  value="{{ $mahasiswa->nama }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"id="email" placeholder="mahasiswa@example.com"  value="{{ $mahasiswa->email }}">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input type="number" class="form-control" name="nohp"
                    id="nohp" placeholder="0812******"  value="{{ $mahasiswa->nohp }}">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan"  value="{{ $mahasiswa->jurusan }}">
            </div>
            <div class="mb-4">
                <label for="foto" class="form-label">Foto Diri</label>
                <input class="form-control" name="foto"
                    type="file" id="foto">
            </div>
            <button class="btn btn-success" type="submit">Simpan</button>
        </form>
 </div>
@endsection


