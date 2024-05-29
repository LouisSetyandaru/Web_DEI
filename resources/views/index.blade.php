@extends('layouts/template')

@section('link')
    @include('layouts/style')
    <link rel="stylesheet" href="resources/css/index.css">
@endsection

@section('content')

    <div class="container mx-auto py-8 text-center mt-32">
        <div class="image mb-14">
            <img src="../../resources/images/logo.png" alt="Logo" class="mx-auto w-1/2 lg:w-1/3">

        </div>

        <div class="text mb-12">
            <h1 class="text-lg lg:text-4xl font-bold"> <small>Digitalize your Business, Empower your Growth</small>
        </div>
    </div>

    <div class="video  w-full flex flex-col items-center"> <!-- Menambahkan mb-8 untuk margin bawah lebih besar -->
        <video class="w-full md:w-5/6 lg:w-3/4 xl:w-2/3" autoplay muted controls>
            <source src="../../resources/images/UMKM Adalah Kita.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="flex justify-center mt-4">
            <form class="div-form" action="{{ route('store') }}" method="post">
                @csrf
                <button class="button1 text-lg px-8 py-4 mb-14">Daftar Sekarang</button>
            </form>
        </div>
    </div>

    <h5 class="text-2xl font-bold mb-24 text-white text-center">Jadilah customer kami yang ke-{{ $clicks }}</h5>


    <h2 class="text-4xl font-bold mb-14 text-white text-center">Tujuan Kami</h2>

    <div class="content-two">

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card1.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2 text-red-400">Meningkatkan penjualan Bisnis Anda</h2>
                        <p class="text-gray-600">Dengan strategi digital marketing yang tepat, DIGPRO dapat membantu UMKM
                            meningkatkan penjualan dan keuntungan. </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2 text-red-400">Membangun reputasi brand Bisnis Anda </h2>
                        <p class="text-gray-600">DIGPRO membantu UMKM membangun kredibilitas dan profesionalisme dengan
                            memiliki website dan akun media sosial yang aktif dan menarik. </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card3.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2 text-red-400">Meningkatkan efisiensi operasional Bisnis Anda</h2>
                        <p class="text-gray-600">DIGPRO membantu UMKM menghemat waktu dan biaya dengan menggunakan teknologi
                            digital untuk mengelola bisnis. </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card4.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2 text-red-400">Meningkatkan jangkauan pasar Bisnis Anda</h2>
                        <p class="text-gray-600">DIGPRO membantu UMKM untuk menjangkau lebih banyak pelanggan potensial
                            melalui internet dan media sosial. </p>
                    </div>
                </div>
            </div>
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
                <p class="mt-2">DIGPRO adalah mitra digital bagi UMKM, menyediakan solusi handal dengan kerjasama penyedia
                    layanan website, platform pembayaran, asosiasi UMKM, dan influencer lokal.</p>
                <p class="mt-2">Fokusnya adalah meningkatkan penjualan, membangun reputasi merek, meningkatkan efisiensi,
                    dan memperluas jangkauan pasar untuk UMKM, membantu mereka sukses dalam era digital.</p>
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

    <h2 class="text-4xl font-bold mb-14 text-white text-center">Paket Kami</h2>

    <div class="content-two">

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card1.jpg"
                        alt="Image">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-red-400">Paket 1 Bulan</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>Cocok untuk bisnis awal-awal yang ingin mencoba digitalisasi.</li>
                            <li>Mendapatkan 8-6 konten/postingan.</li>
                            <li>Ideal untuk meningkatkan eksposur online dan membangun brand awareness.</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-red-400">Hanya Rp.250.000</h1>

                    </div>
                    <div class="p-4 flex justify-center"> 
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1">Coba Sekarang</button>
                        </form>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-6 space-y-4">
                        <h2 class="font-bold text-xl mb-2 text-center text-red-400">Paket 3 Bulan</h2>
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <li>Pilihan tepat untuk bisnis yang ingin komitmen jangka pendek.</li>
                            <li>Mendapatkan total 24-48 konten/postingan/story.</li>
                            <li>Dilengkapi dengan panduan dan pelatihan dasar untuk mengelola media sosial.</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-red-400">Hanya Rp.690.000</h1>

                    </div>
                    <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1">Coba Sekarang</button>
                        </form>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-red-400">Paket 6 Bulan</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>Solusi hemat biaya untuk bisnis yang ingin berkembang secara bertahap.</li>
                            <li>Mendapatkan total 48-96 konten/postingan/story.</li>
                            <li>Mendapatkan website landing page sederhana dengan full maintenance selama 6 bulan.</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-red-400">Hanya Rp.1.450.000</h1>

                    </div>
                    <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1">Coba Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center min-h-screen">
        <div class="container mx-auto py-8">
            <div class="image">
                <img src="../../resources/images/Diskon.png" alt="Logo" class="mx-auto">
            </div>
        </div>
    </div>
@endsection
