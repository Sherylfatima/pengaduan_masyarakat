<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard.dashboard', [
            'title'         => 'APML | Dashboard',
            'header'        => 'Dashboard',
            'breadcrumb1'   => 'Dashboard',
            'breadcrumb2'   => 'Index',
            'dataPengaduans' => Pengaduan::with('kategori')->get(),
            'dataMasyarakat'     => User::where('role', 'Masyarakat')->count(),

        ]);
    }
}
