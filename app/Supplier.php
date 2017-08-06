<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //

     public function pembelian()
	{
		return $this->hasMany('App\Pembelian','id_supplier');
	}
}
