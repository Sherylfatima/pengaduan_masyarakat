<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanMasukController extends Controller
{
    public function index()
    {
        return view('pages.admin.laporanmasuk.index');
    }
    //Detail Laporan
    public function detail()
    {
        return view('pages.admin.laporanmasuk.detail');
    }
}
