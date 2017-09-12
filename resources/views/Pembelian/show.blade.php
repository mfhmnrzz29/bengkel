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
			<div class="panel-heading">Data Pembelian - Detail
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('pembelian.update', $pembelian->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Nama Supplier</label>
						<input type="text" name="jumlah" class="form-control" value="{{$pembelian->supplier->nama}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<input type="text" name="jumlah" class="form-control" value="{{$pembelian->barang->nama_barang}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Harga</label>
						<input type="text" name="harga" class="form-control" value="Rp.{{$pembelian->harga}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Jumlah Barang</label>
						<input type="text" name="jumlah" class="form-control" value="{{$pembelian->jumlah}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Total Harga</label>
						<input type="text" name="total_harga" class="form-control" value="Rp.{{$pembelian->total_harga}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Tanggal Pembelian</label>
						<input type="text" name="tanggal" class="form-control" value="{{$pembelian->created_at}}" readonly="">
					</div>
				</form>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection