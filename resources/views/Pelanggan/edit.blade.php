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
			<div class="panel-heading">Data Pelanggan - Edit
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('pelanggan.update', $pelanggan->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Nama Pelanggan</label>
						<input type="text" name="nama" class="form-control" required="" value="{{$pelanggan->nama}}">
					</div>
					<div class="form-group">
						<label class="control-lable">Alamat</label>
						<textarea name="alamat" class="form-control" required="">{{$pelanggan->alamat}}</textarea>
					</div>
					<div class="form-group">
						<label class="control-lable">Nomor Telepon</label>
						<input type="text" name="no_telepon" class="form-control" required="" value="{{$pelanggan->no_telepon}}">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection