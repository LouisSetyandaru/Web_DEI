<?php

use App\Http\Controllers\StatisticController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/daftar_form.blade.php', function () {
    return view('daftar_form');
});

Route::get('/tentang_kami.blade.php', function () {
    return view('tentang_kami');
});

Route::get('/butuh_bantuan.blade.php', function () {
    return view('butuh_bantuan');
});

Route::get('/langganan_form.blade.php', function () {
    return view('langganan_form');
});

Route::get('/count_page.blade.php', function () {
    return view('count_page');
});

Route::get('/daftar_form', [StatisticController::class, 'store']);
Route::get('/count_page', [StatisticController::class, 'index']);
