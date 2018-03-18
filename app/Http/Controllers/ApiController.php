<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Penjualan;

class ApiController extends Controller
{
	public function pembelian()
    {
    	return Pembelian::all();
    }

    public function penjualan()
    {
    	return Penjualan::all();
    }

    public function listdata()
    {

    }
}
