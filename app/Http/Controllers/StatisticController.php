<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;

class StatisticController extends Controller
{
    public function store(Request $request)
    {
        Statistic::create([
            'button_name' => 'Daftar Sekarang'
        ]);

        return redirect()->back();
    }

    public function index()
{
    $clicks = Statistic::where('button_name', 'Daftar Sekarang')->count();
    return view('count_page', compact('clicks'));

}
}
