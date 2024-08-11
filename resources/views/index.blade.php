@extends('layouts/template')

@section('link')
    @include('layouts/style')
    <link rel="stylesheet" href="resources/css/index.css">
@endsection

@section('content')

<style>

.button1 {
        background-color: #196CBA; /* Warna latar belakang tombol */
        color: white; /* Warna teks tombol */
        border: none; /* Hapus border jika tidak diinginkan */
        padding: 10px 20px; /* Padding dalam tombol */
        text-align: center; /* Teks dalam tombol rata tengah */
        text-decoration: none; /* Hapus garis bawah pada teks */
        display: inline-block; /* Agar tombol menjadi inline */
        font-size: 16px; /* Ukuran font tombol */
        margin: 4px 2px; /* Margin tombol */
        cursor: pointer; /* Menampilkan kursor tangan saat hover */
        border-radius: 4px; /* Membuat pojok tombol sedikit melengkung */
    }

    .button1:hover {
    color: #196CBA; /* Warna teks tombol saat dihover */
}

.custom-logo {
    width: 200px; /* Atur lebar gambar sesuai dengan preferensi Anda */
    height: auto; /* Tinggi otomatis disesuaikan dengan lebar yang ditentukan */
    margin: 0 20px;
}

.content-two .bg-white {
    transition: background-color 0.3s, color 0.3s; /* Tambahkan efek transisi untuk perubahan warna */
}

.content-two .bg-white:hover {
    background-color: #196CBA; /* Ubah warna latar belakang saat dihover */
}

.content-two .bg-white:hover h2,
.content-two .bg-white:hover p, .content-two .bg-white:hover li, .content-two .bg-white:hover h1 {
    color: white; /* Ubah warna teks saat dihover */
}

@media screen and (max-width: 600px) {
    .custom-logo {
        width: 100%; /* Menjadikan lebar gambar 100% saat tampilan mobile */
        margin: 10px 0; /* Menambahkan margin vertikal 10px di antara gambar-gambar saat tampilan mobile */
    }
}
</style>

    <div class="container mx-auto py-8 text-center mt-32">
        <div class="text mb-12 text-center">
            <h1 class="text-lg lg:text-4xl font-bold text-white inline-block">
                Digitalize your Business, Empower your Growth <span class="text-sm lg:text-2xl font-serif">with</span>
                <img src="../../resources/images/digpro_logo_dark.png" alt="Logo" class="w-1/4 lg:w-1/6 inline-block align-middle">
            </h1>
        </div>
    </div>

    <div class="video  w-full flex flex-col items-center">
        <video class="w-full md:w-5/6 lg:w-3/4 xl:w-2/3" autoplay muted controls>
            <source src="../../resources/images/UMKM Adalah Kita.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="flex justify-center mt-4">
            <form class="div-form" action="{{ url('/daftar_form') }}" method="get">
                <button class="button1 text-lg px-8 py-4 mb-14">Daftar Sekarang</button>
            </form>
        </div>
    </div>



    <style>
        .custom-margin {
            margin-right: 8px;
            /* Mengatur margin kanan elemen video */
        }
    </style>
    <div class="container mx-auto py-8 mb-14">
        <div class="flex flex-col md:flex-row items-center md:justify-between space-y-4 md:space-y-0">
            <div class="video md:w-1/3 items-center justify-center mx-auto mb-4 md:mb-0 custom-margin">
                <video class="" autoplay muted controls>
                    <source src="../../resources/images/Digpro.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="mx-auto text-white md:w-2/3 max-w-md">
                <h1 class="text-2xl font-bold mb-6">Tentang Kami</h1>
                <p class="mt-2">DIGPRO adalah mitra digital bagi pebisnis, menyediakan solusi handal dengan kerjasama penyedia
                    layanan website, platform pembayaran, asosiasi pebisnis, dan influencer lokal.</p>
                <p class="mt-2">Fokusnya adalah meningkatkan penjualan, membangun reputasi merek, meningkatkan efisiensi,
                    dan memperluas jangkauan pasar untuk pebisnis, membantu mereka sukses dalam era digital.</p>
                <p class="mt-2 mb-6">Bergabunglah dengan DIGPRO sekarang dan lihat bagaimana kami dapat membantu mendorong
                    pertumbuhan bisnis Anda!</p>
                <div class="mt-4">
                    <form class="div-form" action="daftar_form.blade.php" method="get">
                        <button class="button1">Daftar Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-4xl font-bold mb-14 text-white text-center">Tujuan Kami</h2>

    <div class="content-two">

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card1.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2 text-blue-400">Meningkatkan penjualan Bisnis Anda</h2>
                        <p class="text-gray-600">Dengan strategi digital marketing yang tepat, DIGPRO dapat membantu pebisnis
                            meningkatkan penjualan dan keuntungan. </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2 text-blue-400">Membangun reputasi brand Bisnis Anda </h2>
                        <p class="text-gray-600">DIGPRO membantu pebisnis membangun kredibilitas dan profesionalisme dengan
                            memiliki website dan akun media sosial yang aktif dan menarik. </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card3.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2 text-blue-400">Meningkatkan efisiensi operasional Bisnis Anda</h2>
                        <p class="text-gray-600">DIGPRO membantu pebisnis menghemat waktu dan biaya dengan menggunakan teknologi
                            digital untuk mengelola bisnis. </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card4.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2 text-blue-400">Meningkatkan jangkauan pasar Bisnis Anda</h2>
                        <p class="text-gray-600">DIGPRO membantu pebisnis untuk menjangkau lebih banyak pelanggan potensial
                            melalui internet dan media sosial. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <h2 class="text-4xl font-bold mb-14 text-white text-center">Jasa Kami</h2>

    <div class="content-two">

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card1.jpg"
                        alt="Image">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Paket 1 Bulan</h2>

                    </div>
                    <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1">Liat Pricelist</button>
                        </form>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-6 space-y-4">
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Paket 3 Bulan</h2>
                    </div>
                    <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1">Liat Pricelist</button>
                        </form>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-6 space-y-4">
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Paket 3 Bulan</h2>
                    </div>
                    <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1">Liat Pricelist</button>
                        </form>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-6 space-y-4">
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Paket 3 Bulan</h2>
                    </div>
                    <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1">Liat Pricelist</button>
                        </form>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-6 space-y-4">
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Paket 3 Bulan</h2>
                    </div>
                    <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1">Liat Pricelist</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
