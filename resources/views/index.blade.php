@extends('layouts.layout')

@section('title')
Index Page
@endsection

@section('content')
<section class="hero">
    <img src="assets/images/hero-image.jpg" alt="Mahasiswa studying together">
    <h1>Raih Masa Depanmu Sekarang!</h1>
    <p>Dapatkan sumber daya, komunitas, dan peluang untuk mahasiswa Indonesia.</p>
    <a href="/mahasiswa/create" class="btn">Daftar Gratis!</a>
  </section>

  <section class="benefits">
    <div class="benefit">
      <i class="fas fa-book"></i> <h3>Sumber Daya Lengkap</h3>
      <p>Akses beasiswa, internship, panduan belajar, dan masih banyak lagi.</p>
    </div>
    <div class="benefit">
      <i class="fas fa-users"></i> <h3>Komunitas Aktif</h3>
      <p>Terhubung dengan mahasiswa lain, berbagi pengalaman, dan bangun jaringan.</p>
    </div>
  </section>

  <section class="testimonials">
    </section>
@endsection