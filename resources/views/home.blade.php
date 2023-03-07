<!-- Disimpan di resources/views/child.blade.php -->
@extends('layouts.app')
@section('title', 'Home')
@section('navbar')
@parent
@endsection
@section('content')
    <img src="{{ asset('image/main-image.jpg') }}" alt="main-image" style="width: 100%">
@endsection
