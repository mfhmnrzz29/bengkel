@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-3">
		<!--nav-->
				@include('layouts.nav')
			<!--end nav-->
	</div>
		<center><h1>Data Jasa</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Data Jasa
			<div class="panel-title pull-right"><a href="/jasa/create">+Tambah Data</a></div></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Jenis Jasa</th>
							<th>Harga</th>
							<th colspan="3"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
						@foreach($jasa as $data)
						<tr>
							<td>{{$data->nama}}</td>
							<td>{{$data->harga}}</td>
							<td>
								<a class="btn btn-success" href="/jasa/{{$data->id}}/edit">Edit</a>
							</td>
							<td>
								<a class="btn btn-primary" href="/jasa/{{$data->id}}">Show</a>
							</td>
							<td>
								<form action="{{route('jasa.destroy', $data->id)}}" method="POST">
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
@endsection