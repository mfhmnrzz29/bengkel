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
			<div class="panel-heading">Data Penjualan - Create
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
				<form action="{{route('penjualan.store')}}" method="post">
					{{csrf_field()}}

					<div class="form-group">
						<label class="control-lable">Nama Pelanggan</label>
						<select name="id_pelanggan" class="form-control">
							@foreach($pelanggan as $data)
							<option value="{{$data->id}}">
								{{$data->nama}}
							</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<select name="id_barang" class="form-control">
						<option value=" "></option>
							@foreach($barang as $data)
							<option value="{{$data->id}}">
								{{$data->nama_barang}}
							</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-lable">Jumlah Barang</label>
						<input type="text" name="jumlah" class="form-control" >
					</div>

					<div class="form-group">
						<label class="control-lable">Jenis Jasa</label>
						<select name="id_jasa" class="form-control">
						<option value=" "></option>
							@foreach($jasa as $data)
							<option value="{{$data->id}}">
								{{$data->nama}}
							</option>
							@endforeach
						</select>
					</div>

					<input type="hidden" name="id_karyawan" value="{{ Auth::user()->id }}">

					
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
</div>
@endsection