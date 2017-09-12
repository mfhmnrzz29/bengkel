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
			<div class="panel-heading">Data Jasa
			<div class="panel-title pull-right"><a href="/jasa/create">+Tambah Data</a></div></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Jenis Jasa</th>
							<th>Harga</th>
							<th colspan="2"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
						@foreach($jasa as $data)
						<tr>
							<td>{{$data->nama}}</td>
							<td>Rp.{{$data->harga}}</td>
							<td><center>
								<a class="btn btn-success" href="/jasa/{{$data->id}}/edit"><i class="fa fa-btn fa-edit"></i>Edit</a></center>
							</td>
							<td>
								<form action="{{route('jasa.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<center><input type="submit" class="btn btn-danger" value="Delete"></center>
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
</div>
@endsection