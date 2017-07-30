@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<center><h1>Data Barang</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Data Barang
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('barang.update', $barang->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_method" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Kode Barang</label>
						<input type="text" name="kode_barang" class="form-control" required="" value="{{$barang->kode_barang}}" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<input type="text" name="nama_barang" class="form-control" required="" value="{{$barang->nama_barang}}" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga Barang</label>
						<input type="text" name="harga_barang" class="form-control" required="" value="{{$barang->harga_barang}}" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Jumlah Barang</label>
						<input type="text" name="jumlah_barang" class="form-control" required="" value="{{$barang->jumlah_barang}}" readonly=""> 
					</div>
					<div class="form-group">
						<label class="control-lable">Satuan</label>
						<input type="text" name="satuan" class="form-control" required="" value="{{$barang->satuan}}" readonly="">
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
@endsection