<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('pages.admin.masyarakat.index', [
            'title'                 => 'APM | Masyarakat',
            'header'                => 'Masyarakat',
            'breadcrumb1'           => 'Masyarakat',
            'breadcrumb2'           => 'Index',
            'dataMasyarakat'        =>  User::where('role', 'Masyarakat')->get()
        ]);
    }
}
