<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use PDF;
use Excel;

class LaporanPembelian extends Controller
{
    //
    public function index()
    {
        //
        $pembelian = Pembelian::all();
        return view('laporan.pembelian', compact('pembelian'));
    }

    public function index2(Request $request)
    {
        //
    	$a = $request->a;
    	$b = $request->b;
		$pembelian = Pembelian::whereBetween('created_at', [$a, $b])->get();
		$sum = $pembelian->sum('total_harga');
      $pdf = PDF::loadView('laporan/pembelian1', compact('pembelian', 'a','b','sum'));
      return $pdf->download('laporanpembelian.pdf');
    }

    public function index3(Request $request)
    {
        //
        $a = $request->a;
        $b = $request->b;
        $pembelian = Pembelian::whereBetween('created_at', [$a, $b])->get();
        $sum = $pembelian->sum('total_harga');
        return view('laporan.pembelian2', compact('pembelian', 'a','b','sum'));
    }

    public function downloadExcel($type)
    {
        $data = Pembelian::get()->toArray();
        return Excel::create('Laporan Pembelian', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
}
