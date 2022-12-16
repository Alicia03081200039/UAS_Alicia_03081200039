<?php

namespace App\Http\Controllers;

use App\Models\query;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        $langganan = tampilan::all();
        return view('tampilan',['tampilan'=>$langganan]);

    }

    public function cetak_pdf()
    {
        $langganan = tampilan::all();

        $pdf = PDF::loadview('tampilanpdf',['tampilan'=>$langganan]);
        return $pdf->download('tampilan');
    }
}
