@extends('layouts.data')
@section('content')
<div class="panel panel-primary">
			<div class="panel-heading">Data Penjualan - Detail
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
				<form action="{{route('penjualan.update', $penjualan->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<select name="id_barang" class="form-control" disabled="">
						<option value=" "></option>
							@foreach($barang as $data)
                <option value="{{$data->id}}" <?php  if($penjualan->id_barang == $data->id)
                       echo "selected='selected'"; ?>>{{$data->nama_barang}}</option>
            @endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-lable">Jumlah Barang</label>
						<input type="text" name="jumlah" class="form-control" value="{{$penjualan->jumlah}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-lable">Jenis Jasa</label>
						<select name="id_jasa" class="form-control" disabled="">
						<option value=" "></option>
							@foreach($jasa as $data)
                <option value="{{$data->id}}" <?php  if($penjualan->id_jasa == $data->id)
                       echo "selected='selected'"; ?>>{{$data->nama}}</option>
            @endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-lable">Total Harga</label>
						<input type="text" name="jumlah" class="form-control" value="Rp.{{number_format($penjualan->total_harga)}},-" readonly="">
					</div>

				</form>
				</div>
			</div>
@endsection