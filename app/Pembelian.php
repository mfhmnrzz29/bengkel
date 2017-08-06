<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    //

    public function supplier() {
    	return $this->belongsTo('App\Supplier');
    }

    public function barang() {
    	return $this->belongsTo('App\Barang');
    }
}
