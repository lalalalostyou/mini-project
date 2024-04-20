@extends('layouts.layout2')

@section('title')
Create Mahasiswa
@endsection

@section('content')
<div class="container py-5">
        <h1>Tambah data</h1>
        <form action="/mahasiswa" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="NIM" class="form-label">Nim</label>
                <input type="number" class="form-control" name="NIM"
                     id="NIM" placeholder="12*******">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Mahasiswa">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"id="email" placeholder="mahasiswa@example.com">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input type="number" class="form-control" name="nohp"
                    id="nohp" placeholder="0812******">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan">
            </div>
            <div class="mb-4">
                <label for="foto" class="form-label">Foto Diri</label>
                <input class="form-control" name="foto"
                    type="file" id="foto">
            </div>
            <button class="btn btn-success" type="submit">Tambah</button>
        </form>
 </div>
@endsection

