<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    public function penjualan()
	{
		return $this->hasMany('App\Penjualan', 'id_pelanggan');
	}
}
