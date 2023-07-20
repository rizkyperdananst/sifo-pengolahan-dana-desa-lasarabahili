<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $pemasukan = Pemasukan::pluck('pemasukan')->sum();
        $pengeluaran = Pengeluaran::pluck('pengeluaran')->sum();
        $total_dana = $pemasukan - $pengeluaran;
        
        return view('dashboard.dashboard', compact('pemasukan', 'pengeluaran', 'total_dana'));
    }
}
