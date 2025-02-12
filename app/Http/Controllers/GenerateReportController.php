<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateReportController extends Controller
{
    public function index()
    {
        return view('pages.admin.generatereport.index');
    }
}
