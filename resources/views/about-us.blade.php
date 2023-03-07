<!-- Disimpan di resources/views/child.blade.php -->
@extends('layouts.app')
@section('title', 'About Us')
@section('navbar')
@parent
@endsection
@section('content')
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-center">
    <main class="px-3 text-white">
        <h1>About Us</h1>
        <img src="https://i0.wp.com/travellersblitar.com/wp-content/uploads/2017/12/taman-ayu-gogoniti.jpg"
            style="width: 640px; border-radius: 64px">
        <p class="lead">Hutan Pinus Gogoniti merupakan salah satu destinasi wisata di Blitar yang cukup baru. Kawasan
            wisata yang berada di perbukitan dengan pepohonan pinus yang rindang membuat Hutan Pinus Gogoniti tepat
            untuk mencari kesejukan alami. Selain menawarkan pemandangan dan suasana alam yang sejuk, anda juga bisa
            menghabiskan waktu bersama keluarga dengan belajar mengendarai kuda di bagian atasnya.</p><br>
        <p class="lead">Aktivitas yang bisa dilakukan Hutan Pinus Gogoniti selain menunggang kuda dan bersantai bersama
            keluarga
            adalah berayun-ayun menggunakan hammock di pepohonan pinus. Secara administratif Hutan Pinus Gogoniti ini
            terletak di Desa Kemirigede, Kec. Kesamben, Kab. Blitar.</p><br>
        <p class="lead">Cara menuju Hutan Pinus Gogoniti bisa menggunakan rute SPBU Kesamben menuju utara menyusuri Desa
            Pagerwojo –
            Desa Tepas dan masuk Desa Kemirigede. Dari pertigaan masjid desa ambil ke kiri (ada petunjuk arah ke Hutan
            Pinus Gogoniti). Apabila bingung, anda bisa menggunakan peta di bawah ini.</p><br>
    </main>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15801.251789591233!2d112.4019109!3d-8.0695284!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7890ec50b0608f%3A0xacfe3919f859ac4f!2sWisata%20Hutan%20Pinus%20Gogoniti!5e0!3m2!1sid!2sid!4v1678151323989!5m2!1sid!2sid"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection
