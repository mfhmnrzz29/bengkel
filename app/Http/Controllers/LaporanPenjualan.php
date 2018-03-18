<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use PDF;
use Excel;

class LaporanPenjualan extends Controller
{
    //
    public function index()
    {
        //
        $penjualan = Penjualan::all();
        return view('laporan.penjualan', compact('penjualan'));
    }
    
    public function index2(Request $request)
    {
        //
    	$a = $request->a;
    	$b = $request->b;
		$penjualan = Penjualan::whereBetween('created_at', [$a, $b])->get();
		$sum = $penjualan ->sum('total_harga');
        $pdf = PDF::loadView('laporan/penjualan1', compact('penjualan', 'a','b','sum'));
      return $pdf->download('laporanpenjualan.pdf');
    }
 
    public function index3(Request $request)
    {
        //
        $a = $request->a;
        $b = $request->b;
        $penjualan = Penjualan::whereBetween('created_at', [$a, $b])->get();
        $sum = $penjualan->sum('total_harga');
        return view('laporan.penjualan2', compact('penjualan', 'a','b','sum'));
    }

    public function downloadExcel($type)
    {
        $currentMonth = date('m');
        $data = Penjualan::whereRaw('MONTH(created_at) = ?',[$currentMonth])->get()->toArray();
        // $data = Penjualan::get()->toArray();
        return Excel::create('Laporan Penjualan', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
}
