<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Pembelian;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentMonth = date('m');
        $penjualan = Penjualan::whereRaw('MONTH(created_at) = ?',[$currentMonth])->get();
        $pembelian = Pembelian::whereRaw('MONTH(created_at) = ?',[$currentMonth])->get();
        $sum = $penjualan->sum('total_harga');
        $sum1 = $pembelian->sum('total_harga');
        $per = $sum - $sum1 ;
        $a = ($per / $sum1) * 100;
        return view('home',compact('sum','sum1','a'));
    }
}
