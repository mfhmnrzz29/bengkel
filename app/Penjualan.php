<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function barang() {
    	return $this->belongsTo('App\Barang');
    }

    public function jasa()
	{
		return $this->belongsTo('App\Jasa');
	}

     public function pelanggan()
	{
		return $this->belongsTo('App\Pelanggan');
	}
}
