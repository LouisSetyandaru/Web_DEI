@extends('layouts/template')

@section('link')
    @include('layouts/style')
    <link rel="stylesheet" href="resources/css/index.css">
@endsection

@section('content')

<style>

    .content-two .bg-white {
        transition: background-color 0.3s, color 0.3s; /* Tambahkan efek transisi untuk perubahan warna */
    }

    .content-two .bg-white:hover {
        background-color: #ff1847; /* Ubah warna latar belakang saat dihover */
    }

    .content-two .bg-white:hover h2,
    .content-two .bg-white:hover p, .content-two .bg-white:hover li, .content-two .bg-white:hover h1 {
        color: white; /* Ubah warna teks saat dihover */
    }
    </style>


    <div class="content-one">
        <script type="text/javascript" src="https://form.jotform.com/jsform/241414253941451"></script>
    </div>

    <div class="content-two mb-32">

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
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
                <!-- Card 2 -->
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
                        <!-- Center aligned and colored price -->
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
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-8 mb-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between space-y-4 md:space-y-0">
            <div class="items-center justify-center mx-auto mb-4 md:mb-0 custom-margin">
                <img src="../../resources/images/photocustomer.jpg" alt="" class="w-100 h-80 mb-4"> <!-- Adjusted the width and height -->
            </div>
            <div class="mx-auto text-white md:w-2/3 max-w-md">
                <h1 class="text-2xl font-bold mb-6">Informasi Paket</h1>
                <p class="text-lg mb-5">Dalam paket yang fleksibel untuk kebutuhan customer, kami menyediakan layanan konsultasi dan analisis kebutuhan bisnis untuk membantu Anda memahami dan mencapai tujuan bisnis Anda. Selain itu, kami menawarkan strategi digital marketing yang terarah untuk memastikan kampanye Anda mencapai target yang diinginkan. Tim kami juga ahli dalam pembuatan konten yang menarik dan informatif, serta manajemen media sosial profesional yang mampu meningkatkan keterlibatan audiens. Untuk memastikan transparansi dan kemajuan yang konsisten, kami menyediakan laporan performa berkala yang mendetail. </p>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center min-h-1/2 mb-16">
        <div class="container mx-auto py-8">
            <div class="image">
                <img src="../../resources/images/Diskon.png" alt="Logo" class="mx-auto">
            </div>
        </div>
    </div>
@endsection
