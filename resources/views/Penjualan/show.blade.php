@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-3">
		<!--nav-->
				@include('layouts.nav')
			<!--end nav-->
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Penjualan - Edit
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('penjualan.update', $penjualan->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Nama Pelanggan</label>
						<input type="text" name="jumlah" class="form-control" value="{{$penjualan->pelanggan->nama}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<input type="text" name="jumlah" class="form-control" value="<?php if($penjualan->id_barang != null){echo ''.$penjualan->barang->nama_barang.'';}?>" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Jumlah Barang</label>
						<input type="text" name="jumlah" class="form-control" value="{{$penjualan->jumlah}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Jenis Jasa</label>
						<input type="text" name="jumlah" class="form-control" value="<?php if($penjualan->id_jasa != null){echo ''.$penjualan->jasa->nama.'';}?>" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Total Harga</label>
						<input type="text" name="jumlah" class="form-control" value="Rp.{{$penjualan->total_harga}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Tanggal</label>
						<input type="text" name="jumlah" class="form-control" value="{{$penjualan->created_at}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Nama Karyawan</label>
						<input type="text" name="jumlah" class="form-control" value="{{$penjualan->karyawan->name}}" readonly="">
					</div>
					
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection