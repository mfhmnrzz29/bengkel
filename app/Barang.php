<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //

    public function pembelian()
	{
		return $this->hasMany('App\Pembelian','id_barang');
	}

	public function penjualan()
	{
		return $this->hasMany('App\Penjualan','id_barang');
	}	
}
