@extends('layouts.app')
@section('title', 'Kopi Gogoniti')
@section('navbar')
@parent
@endsection
@section('content')
<div class="container py-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('image/kopi1.jpg') }}"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('image/kopi2.jpg') }}"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('image/kopi3.jpg') }}"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
