<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;

class DashboardMasyarakatController extends Controller
{
   public function index(){
    return view('frontend.masyarakat.head');
   }
}
