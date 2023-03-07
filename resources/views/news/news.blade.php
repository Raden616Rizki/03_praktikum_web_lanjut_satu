@extends('layouts.app')
@section('title', 'Berita')
@section('navbar')
@parent
@endsection
@section('content')
<div class="container py-4">
    <div class="row row-cols-1 row-cols-md-4 g-4" id="cards-box">
        <div class="col">
            <div class="card h-100">
                <img src="https://kec-kesamben.blitarkab.go.id/wp-content/uploads/2017/11/gogoniti-300x225.jpg"
                    class="card-img-top">
                <div class="card-body">
                    <a href="/news/hutan-pinus-gogoniti-destinasi-wisata-baru-di-kecamatan-kesamban-kabupaten-blitar"><h5 class="card-title">Hutan Pinus Gogoniti, Destinasi Wisata baru di Kecamatan Kesamban Kabupaten Blitar</h5></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
