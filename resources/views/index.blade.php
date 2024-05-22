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

            </div>
        </div>

    </div>

    <div class="content-two">

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card1.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2">Meningkatkan penjualan Bisnis Anda</h2>
                        <p class="text-gray-600">Dengan strategi digital marketing yang tepat, DIGPRO dapat membantu UMKM
                            meningkatkan penjualan dan keuntungan. </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2">Membangun reputasi brand Bisnis Anda </h2>
                        <p class="text-gray-600">DIGPRO membantu UMKM membangun kredibilitas dan profesionalisme dengan
                            memiliki website dan akun media sosial yang aktif dan menarik. </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card3.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2">Meningkatkan efisiensi operasional Bisnis Anda</h2>
                        <p class="text-gray-600">DIGPRO membantu UMKM menghemat waktu dan biaya dengan menggunakan teknologi
                            digital untuk mengelola bisnis. </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card4.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2">Meningkatkan jangkauan pasar Bisnis Anda</h2>
                        <p class="text-gray-600">DIGPRO membantu UMKM untuk menjangkau lebih banyak pelanggan potensial
                            melalui internet dan media sosial. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto py-8">
        <div class="flex flex-col md:flex-row items-center md:justify-between space-y-4 md:space-y-0 md:space-x-4">
            <div class="video md:w-1/3 items-center justify-center mx-auto">
                <video class="" autoplay muted controls>
                    <source src="../../resources/images/Digpro.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class=" mx-auto text-white md:w-2/3">
                <h1 class="text-2xl font-bold">Tentang Kami</h1>
                <p class="mt-4">Selamat datang di DIGPRO, solusi terdepan untuk UMKM/Binsis dalam mewujudkan potensi
                    digital mereka. Kami menawarkan layanan pelanggan online yang komprehensif untuk membantu UMKM menangani
                    tantangan digitalisasi dan menjawab pertanyaan terkait. Dengan strategi digital marketing yang
                    disesuaikan, kami tidak hanya membantu meningkatkan penjualan dan keuntungan UMKM, tetapi juga membangun
                    reputasi merek yang kuat melalui kehadiran online yang menarik. Melalui teknologi digital, kami membantu
                    UMKM meningkatkan efisiensi operasional mereka, menghemat waktu dan biaya. Selain itu, kami juga bekerja
                    untuk memperluas jangkauan pasar UMKM, membantu mereka menjangkau lebih banyak pelanggan potensial
                    melalui internet dan media sosial. Bergabunglah dengan DIGPRO sekarang dan lihat bagaimana kami dapat
                    membantu mendorong pertumbuhan bisnis Anda! </p>
                <div class="mt-4">
                    <form class="div-form" action="daftar_form.blade.php" method="get">
                        <button class="button1 bg-blue-500 text-white px-4 py-2 rounded">Daftar Sekarang</button>
                    </form>
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
    <div class="content-two">

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card1.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2">Paket 1 Bulan</h2>
                        <p class="text-gray-600">1.Cocok untuk bisnis awal-awal yang ingin mencoba digitalisasi.</p>
                        <p class="text-gray-600">2.Mendapatkan 8-6 konten/postingan.</p>
                        <p class="text-gray-600">3.Ideal untuk meningkatkan eksposur online dan membangun brand awarnerss.</p>
                        <h1 class="font-bold text-lg mb-2">Hanya Rp.250.000</h1>
                    </div>
                    <div class="mt-4">
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1 bg-blue-500 text-white px-4 py-2 rounded">Coba Sekarang</button>
                        </form>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2">Paket 3 Bulan</h2>
                        <p class="text-gray-600"> 1.Pilihan tepat untuk bisnis yang ingin komitmen jangka pendek.</p>
                        <p class="text-gray-600"> 2.Mendapatkan total 24-48 konten/postingan/story.</p>
                        <p class="text-gray-600"> 3.Dilengkapi dengan panduan dan pelatihan dasar untuk mengelola media sosial.</p>
                        <h1 class="font-bold text-lg mb-2">Hanya Rp.690.000</h1>
                    </div>
                    <div class="mt-4">
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1 bg-blue-500 text-white px-4 py-2 rounded">Coba Sekarang</button>
                        </form>
                    </div>
                </div>
                 <!-- Card 3 -->
                 <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover object-center" src="../../resources/images/card2.jpg"
                        alt="Image">
                    <div class="p-4">
                        <h2 class="font-bold text-lg mb-2">Paket 6 Bulan</h2>
                        <p class="text-gray-600">1.Solusi hemat biaya untuk bisnis yang ingin berkembang secara bertahap.</p>
                        <p class="text-gray-600">2.Mendapatkan total 48-96 konten/postingan/story.</p>
                        <p class="text-gray-600">3.Mendapatkan website landing page sederhana dengan full maintenance selama 6 bulan.</p>
                        <h1 class="font-bold text-lg mb-2">Hanya Rp.1.450.000</h1>
                    </div>
                    <div class="mt-4">
                        <form class="div-form" action="langganan_form.blade.php" method="get">
                            <button class="button1 bg-blue-500 text-white px-4 py-2 rounded">Coba Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
