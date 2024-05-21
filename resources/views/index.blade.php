@extends('layouts/template')

@section('link')
    @include('layouts/style')
    <link rel="stylesheet" href="resources/css/index.css">
@endsection

@section('content')
    <div class="content-one">

        <div class="text">

            <h1>Digitalize your Bussiness, Empower your Growth with DigPro</h1>
            <p>DIGPRO adalah mitra digital bagi UMKM, menyediakan solusi handal dengan kerjasama penyedia layanan website,
                platform pembayaran, asosiasi UMKM, dan influencer lokal. Fokusnya adalah meningkatkan penjualan, membangun
                reputasi merek, meningkatkan efisiensi, dan memperluas jangkauan pasar untuk UMKM, membantu mereka sukses
                dalam era digital. </p>


        </div>

        <div class="video">
            <video autoplay muted controls>
                <source src="../../resources/images/UMKM Adalah Kita.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="div-button">
                <form class="div-form" action="{{ url('/daftar_form') }}" method="get">
                    <button class="button1">Daftar Sekarang</button>
                </form>

                <div class="text">

                    <h1>Jumlah Klik Tombol "Daftar Sekarang": {{ $clicks }}</h1>

                </div>

            </div>
        </div>

    </div>

    <div class="content-two">

        <h1>Testimoni</h1>
        <div class="text">

            <h1>Digitalize your Bussiness, Empower your Growth with DigPro</h1>
            <p>DIGPRO adalah mitra digital bagi UMKM, menyediakan solusi handal dengan kerjasama penyedia layanan website,
                platform pembayaran, asosiasi UMKM, dan influencer lokal. Fokusnya adalah meningkatkan penjualan, membangun
                reputasi merek, meningkatkan efisiensi, dan memperluas jangkauan pasar untuk UMKM, membantu mereka sukses
                dalam era digital. </p>

        </div>

        <div class="image">

            <img src="../../resources/images/logo.png" alt="">

        </div>
    </div>

@endsection
