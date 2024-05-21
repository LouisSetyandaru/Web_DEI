<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/daftar_form.blade.php', function () {
    return view('daftar_form');
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
