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
			<div class="panel-heading">Data Barang
			<div class="panel-title pull-right"><a href="/barang/create">+Tambah Data</a></div></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Jumlah</th></th>
							<th>Satuan</th>
							<th colspan="3"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
						@foreach($barang as $data)
						<tr>
							<td>{{$data->kode_barang}}</td>
							<td>{{$data->nama_barang}}</td>
							<td>{{$data->harga_barang}}</td>
							<td>{{$data->jumlah_barang}}</td>
							<td>{{$data->satuan}}</td>
							<td>
								<a class="btn btn-success" href="/barang/{{$data->id}}/edit">Edit</a>
							</td>
							<td>
								<a class="btn btn-primary" href="/barang/{{$data->id}}">Show</a>
							</td>
							<td>
								<form action="{{route('barang.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<input type="submit" class="btn btn-danger" value="Delete">
									{{csrf_field()}}
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection