<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class main extends Controller
{
    //
    public function utama()
    {
        $data = DB::table('lapor')->get();
        return view('utama', ['data' => $data]);
    }

    public function buat()
    {
        return view('buat');
    }

    public function detail()
    {
        return view('detail');
    }
}
