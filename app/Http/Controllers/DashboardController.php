<?php

namespace App\Http\Controllers;
use App\Models\MasterKependudukan;
use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $jumlahPenduduk = MasterKependudukan::count(); // Menghitung total data di tabel master_kependudukan
    $jumlahPenduduk = MasterKependudukan::count();
    $jumlahRT = RT::count();
    $jumlahRW = RW::count();
    return view('index', compact('jumlahPenduduk','jumlahRT','jumlahRW'));
}
}
