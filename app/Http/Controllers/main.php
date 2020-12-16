<?php

namespace App\Http\Controllers;

use File ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class main extends Controller
{

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


    public function datadetail($id){
        $data = DB::table('lapor')->where("id" , $id)->get();

        return view('detail', ['data' => $data]) ;
    }

    public function hapus($id){
        $data = DB::table('lapor')->where('id' , $id)->first();

        File::delete('file_data/' . $data->file );

        DB::table('lapor')->where('id' , $id)->delete() ;
       return redirect('/utama') ;
    }
    

}
