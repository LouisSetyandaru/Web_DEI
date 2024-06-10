@extends('layouts/template')

@section('link')
    @include('layouts/style')
    <link rel="stylesheet" href="resources/css/index.css">
@endsection

@section('content')
    <div class="content-one">

        <div class="text-white mr-20">
            <h1 class="text-3xl font-bold mb-7">Universitas Ciputra Surabaya</h1>
            <p class="text-lg mb-5">
                Kunjungi kami di Universitas Ciputra Surabaya, tepatnya di CitraLand CBD Boulevard, Made, Kec. Sambikerep,
                Surabaya, Jawa Timur 60219. Kami siap membantu Anda dengan berbagai kebutuhan, mulai dari informasi
                pendaftaran, konsultasi program studi, hingga proses administrasi.
            </p>
            <p class="text-lg mb-20">
                Bingung mengisi formulir di website? Jangan khawatir! Datang saja ke lokasi kami pada hari Senin-Jumat,
                pukul 10 pagi hingga 3 sore. Tim kami yang ramah dan profesional siap membantu Anda dengan senang hati.
            </p>

            <div class="flex mr-30">
                <div class="text-white mr-35">
                    <img src="../../resources/images/whatsapp.png" alt="" class="w-30 h-20 mb-4">
                    <p class="text-2xl font-bold mb-2 text-green-500">Whatsapp</p>
                    <p class="text-base mb-5">+628115912599</p>
                </div>

                <div class="text-white mr-35 ml-8"> <!-- Menambahkan mt-8 untuk memberikan margin atas -->
                    <img src="../../resources/images/instagram.png" alt="" class="w-20 h-18 mb-4">
                    <p class="text-2xl font-bold mb-2 text-indigo-400">Instagram</p>
                    <a href="https://www.instagram.com/digpro_idn?igsh=c2dheXR6bDF5Zzl1" class="text-base mb-5">@digpro_idn</a>
                </div>
            </div>
        </div>

        <div class="image">

            <p class="mb-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6060211288845!2d112.62902667592162!3d-7.285587192721758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fde455555555%3A0xd7e2611ae591f046!2sUniversitas%20Ciputra%20Surabaya!5e0!3m2!1sen!2sid!4v1716298726234!5m2!1sen!2sid"
                    width="400" height="800" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
        </div>

    </div>
@endsection
