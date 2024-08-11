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

    .content-two .text {
        display: flex;
        flex-direction: column;
        height: 100px; /* Sesuaikan tinggi container untuk memberi ruang vertikal */
    }

    .content-two .text h1 {
        size: 40px;
        margin-bottom: 2px; /* Atur jarak ke bawah */
        text-align: center; /* Agar teks berada di tengah */
    }

    .content-two .bg-white {
        transition: background-color 0.3s, color 0.3s;
    }

    .content-two .bg-white:hover {
        background-color: #196CBA;
    }

    .content-two .bg-white:hover h2,
    .content-two .bg-white:hover p,
    .content-two .bg-white:hover li,
    .content-two .bg-white:hover h1 {
        color: white;
    }

    .text-left {

    margin-left: 80px;

}

</style>

    <div class="content-two mt-32">


        <div class="text mb-12 flex justify-center items-center flex-col">
            <h1 class="text-white text-lg lg:text-6xl font-bold meet-our-team text-center">
                <small>Pricelist</small>
            </h1>
        </div>

        <h1 class="text-white text-lg lg:text-4xl font-bold meet-our-team text-left">
            <small>Social Media Management</small>
        </h1>

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">

                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Basic Management</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ 10x Posting Instagram</li>
                            <li>✅ 10x Image Content</li>
                            <li>✅ Free Content Design (1x revision)</li>
                            <li>✅ Design Feed & Copywriting</li>
                            <li>✅ End-Month Report</li>
                            <li>✅ Support by email & call/WA</li>
                            <li>✅ Free Consultation</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp.1.499.000 / month</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-6 space-y-4">
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Standard Management</h2>
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <li>✅ 20x Posting Instagram</li>
                            <li>✅ 16 Konten Gambar/ 4 Video 30+ Detik</li>
                            <li>✅ Free Content Design (1x revision)</li>
                            <li>✅ Design Feed & Copywriting</li>
                            <li>✅ End-Month Report</li>
                            <li>✅ Support by email & call/WA</li>
                            <li>✅ Free Consultation</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400"> Rp.2.999.000 / month</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Premium Management</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ 30x Posting Instagram</li>
                            <li>✅ 22 Konten Gambar/ 8 Video 30+ Detik</li>
                            <li>✅ Free Content Design (2x revision)</li>
                            <li>✅ Design Feed & Copywriting</li>
                            <li>✅ End-Month Report</li>
                            <li>✅ Support by email & call/WA</li>
                            <li>✅ Free Consultation</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp 4.199.000 / bulan</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
            </div>
        </div>


        <h1 class="text-white text-lg lg:text-4xl font-bold meet-our-team text-left">
            <small>Photography</small>
        </h1>

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Photo Product</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ Free Location Request</li>
                            <li>✅ Free Photo Editing</li>
                            <li>✅ Free Revision</li>
                            <li>✅ Money Return Guarantee</li>

                            <li>✅ Talent += (Rp 250.000)</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp 200.000 / 5 Photos</h1>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp 50.000 / 1 Photo</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
            </div>
        </div>


        <h1 class="text-white text-lg lg:text-4xl font-bold meet-our-team text-left">
            <small>Videography</small>
        </h1>

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Basic Package</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ 2 Videos</li>
                            <li>✅ 30 seconds per videos</li>
                            <li>✅ Video Equipment</li>
                            <li>✅ Concept & Scenario</li>
                            <li>✅ 1x Minor Revision</li>
                            <li>✅ No Transportation Fee</li>
                            <li>✅ MP4 File</li>
                            <li>✅ 1 Week of Work Duration</li>
                            <li>✅ Money Return Guarantee</li>

                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp 999.999</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Pro Package</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ 3 Videos</li>
                            <li>✅ 1 minute per videos</li>
                            <li>✅ Video Equipment</li>
                            <li>✅ Concept & Scenario</li>
                            <li>✅ 2x Minor Revision</li>
                            <li>✅ No Transportation Fee</li>
                            <li>✅ MP4 & Raw File</li>
                            <li>✅ 2 Weeks of Work Duration</li>
                            <li>✅ Money Return Guarantee</li>
                            <li>✅ Storyboard, Visual Effect & Music Free Royalty</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp 2.499.999</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Premium Package</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ 4 Videos</li>
                            <li>✅ 1 minute per videos</li>
                            <li>✅ Video Equipment</li>
                            <li>✅ Concept & Scenario</li>
                            <li>✅ 3x Minor Revision</li>
                            <li>✅ No Transportation Fee</li>
                            <li>✅ MP4 & Raw File</li>
                            <li>✅ 2 Weeks of Work Duration</li>
                            <li>✅ Money Return Guarantee</li>
                            <li>✅ Storyboard, Visual Effect & Music Free Royalty</li>
                            <li>✅ Talent</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp 3.999.999</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
            </div>
        </div>


        <h1 class="text-white text-lg lg:text-4xl font-bold meet-our-team text-left">
            <small>Graphic Design</small>
        </h1>

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">

                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Basic Package</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ Design 50 Feed (1 Design Page)</li>
                            <li>✅ Design 10 Story</li>
                            <li>✅ 3x Revision</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp.1.499.999</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">

                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Pro Package</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ Design 75 Feed (1 Design Page)</li>
                            <li>✅ Design 20 Story</li>
                            <li>✅ 3x Revision</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp.2.499.999</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">

                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Basic Package</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ Design 100 Feed (1 Design Page)</li>
                            <li>✅ Design 30 Story</li>
                            <li>✅ Free Revision</li>
                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp.3.499.999</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
            </div>
        </div>


        <h1 class="text-white text-lg lg:text-4xl font-bold meet-our-team text-left">
            <small>Website Design</small>
        </h1>

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Basic Package</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ Basic Design (3-5 pages)</li>
                            <li>✅ Free 1 Month Maintenance</li>

                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp.3.000.000 / month</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-6 space-y-4"> <!-- Increased padding and added spacing between elements -->
                        <h2 class="font-bold text-xl mb-2 text-center text-blue-400">Basic Package</h2>
                        <!-- Center aligned and slightly larger font size -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <!-- Used list for better readability and spacing between list items -->
                            <li>✅ Basic Design (6-9 pages)</li>
                            <li>✅ Free 3 Month Maintenance</li>

                        </ul>
                        <h1 class="font-bold text-xl text-center text-blue-400">Rp.7.000.000 / month</h1>

                        <div class="p-4 flex justify-center"> <!-- Added padding and centered the button -->
                            <form class="div-form" action="langganan_form.blade.php" method="get">
                                <button class="button1">Try Now</button>
                            </form>
                        </div>
                        <!-- Center aligned and colored price -->
                    </div>
                </div>
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
