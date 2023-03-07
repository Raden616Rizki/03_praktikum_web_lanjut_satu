@extends('layouts.app')
@section('title', 'Spot Wisata')
@section('navbar')
@parent
@endsection
@section('content')
<div class="container py-4">
    <div class="row row-cols-1 row-cols-md-4 g-4" id="cards-box">
        <div class="col">
            <div class="card h-100">
                <img src="https://mblitar.net/wp-content/uploads/2017/05/Hutan-Pinus-Gogoniti.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Gerbang Masuk</h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="https://cdn-2.tstatic.net/suryamalang/foto/bank/images/wisata-lembah-gogoniti-farm-desa-kemirigede-kecamatan-kesamben-kabupaten-blitar.jpg"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Kolam Renang</h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="https://i0.wp.com/travellersblitar.com/wp-content/uploads/2020/02/lembah-gogonitifarm-blitar.jpg?ssl=1"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Lembah Gogoniti Farm</h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="https://pinhome-blog-assets-public.s3.amazonaws.com/2017/05/Screen-Shot-2021-10-24-at-16.41.38.jpg"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Outbound</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
