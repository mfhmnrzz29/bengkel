@extends('layouts.data')
@section('content')
<div class="panel panel-primary">
			<div class="panel-heading">Data Barang - Edit
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
			@if($errors->any())
			<div class="flash alert-danger">
				@foreach($errors->all() as $err)
					<li><span>{{ $err }}</span></li>
				@endforeach
			</div>
			@endif
				<form action="{{route('barang.update', $barang->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Kode Barang</label>
						<input type="text" name="kode_barang" class="form-control" required="" value="{{$barang->kode_barang}}" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<input type="text" name="nama_barang" class="form-control" required="" value="{{$barang->nama_barang}}">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga Beli</label>
						<input type="text" name="harga_beli" class="form-control" required="" value="{{$barang->harga_beli}}">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga Jual</label>
						<input type="text" name="harga_jual" class="form-control" required="" value="{{$barang->harga_jual}}">
					</div>
					<div class="form-group">
						<label class="control-lable">Stok Barang</label>
						<input type="text" name="jumlah_barang" class="form-control" required="" value="{{$barang->jumlah_barang}}" readonly=""> 
					</div>
					<div class="form-group">
						<label class="control-lable">Satuan</label>
						<input type="text" name="satuan" class="form-control" required="" value="{{$barang->satuan}}">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
				</div>
				</div>
@endsection