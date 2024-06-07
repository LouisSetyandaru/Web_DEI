@extends('layouts/template')

@section('link')
    @include('layouts/style')
    <link rel="stylesheet" href="resources/css/index.css">
@endsection

@section('content')
    <div class="content-one">

        <div class="text">

            <h1>Jumlah Klik Tombol "Daftar Sekarang": {{ $clicks }}</h1>

        </div>

        <div class="image">

            <img src="../../resources/images/logo.png" alt="">

        </div>

    </div>

    <div class="content-two">

        <h1>Testimoni</h1>

    </div>
@endsection
