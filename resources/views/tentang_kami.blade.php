@extends('layouts/template')

@section('link')
    @include('layouts/style')
    <link rel="stylesheet" href="resources/css/index.css">
@endsection

@section('content')
<div class="container mx-auto py-8 text-center mt-32">
    <div class="text mb-12">
        <h1 class="text-white text-lg lg:text-4xl font-bold meet-our-team"><small>Meet our Team</small></h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-24 mb-48">
        <!-- 3 anggota tim di atas -->
        <div class="team-member flex flex-col items-center">
            <div class="w-64 h-64 bg-gray-200 rounded-full overflow-hidden mx-auto mb-4">
                <img src="../../resources/images/adriankusuma.png" alt="Team 1" class="w-full h-full object-cover">
            </div>
            <div class="info-box bg-white rounded-md shadow-md p-4">
                <h2 class="font-semibold text-lg text-red-400">Adrian Rafael Kusama</h2>
                <div class="instagram-info flex items-center justify-center mb-4">
                    <img src="../../resources/images/instagram.png" alt="" class="w-5 h-5 mr-2">
                    <p class="text-sm text-indigo-400">@adriankusumaaaa</p>
                </div>
            </div>
        </div>
        <div class="team-member flex flex-col items-center">
            <div class="w-64 h-64 bg-gray-200 rounded-full overflow-hidden mx-auto mb-4">
                <img src="../../resources/images/louissetyandaru.png" alt="Team 1" class="w-full h-full object-cover">
            </div>
            <div class="info-box bg-white rounded-md shadow-md p-4">
                <h2 class="font-semibold text-lg text-red-400">Louis Setyandaru Tri Ananda</h2>
                <div class="instagram-info flex items-center justify-center mb-4">
                    <img src="../../resources/images/instagram.png" alt="" class="w-5 h-5 mr-2">
                    <p class="text-sm text-indigo-400">@louisstrn</p>
                </div>
            </div>
        </div>
        <div class="team-member flex flex-col items-center">
            <div class="w-64 h-64 bg-gray-200 rounded-full overflow-hidden mx-auto mb-4">
                <img src="../../resources/images/widhyastanto.png" alt="Team 1" class="w-full h-full object-cover">
            </div>
            <div class="info-box bg-white rounded-md shadow-md p-4">
                <h2 class="font-semibold text-lg text-red-400">Widhyastanto Ramadhian</h2>
                <div class="instagram-info flex items-center justify-center mb-4">
                    <img src="../../resources/images/instagram.png" alt="" class="w-5 h-5 mr-2">
                    <p class="text-sm text-indigo-400">@stant_221</p>
                </div>
            </div>
        </div>

        <!-- Div with Michael and Bernicko cards -->
        <div class="team-member flex flex-col items-center">
            <div class="w-64 h-64 bg-gray-200 rounded-full overflow-hidden mx-auto mb-4">
                <img src="../../resources/images/michaeldavidsin.png" alt="Team 1" class="w-full h-full object-cover">
            </div>
            <div class="info-box bg-white rounded-md shadow-md p-4">
                <h2 class="font-semibold text-lg text-red-400">Michael David Sin</h2>
                <div class="instagram-info flex items-center justify-center mb-4">
                    <img src="../../resources/images/instagram.png" alt="" class="w-5 h-5 mr-2">
                    <p class="text-sm text-indigo-400">@michaeldavidsin</p>
                </div>
            </div>
        </div>
        <div class="team-member flex flex-col items-center">
            <div class="w-64 h-64 bg-gray-200 rounded-full overflow-hidden mx-auto mb-4">
                <img src="../../resources/images/bernicko.png" alt="Team 1" class="w-full h-full object-cover">
            </div>
            <div class="info-box bg-white rounded-md shadow-md p-4">
                <h2 class="font-semibold text-lg text-red-400">Bernicko Raphael Sugito</h2>
                <div class="instagram-info flex items-center justify-center mb-4">
                    <img src="../../resources/images/instagram.png" alt="" class="w-5 h-5 mr-2">
                    <p class="text-sm text-indigo-400">@bernicko_rphl</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
