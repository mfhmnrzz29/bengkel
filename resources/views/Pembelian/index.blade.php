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
			<div class="panel-heading">Data Pembelian
			<div class="panel-title pull-right"><a href="/pembelian/create">+Tambah Data</a></div></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Supplier</th>
							<th>Tanggal</th>
							<th colspan="3"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					?>
						@foreach($pembelian as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->supplier->nama}}</td>
							<td>{{$data->created_at}}</td>
							<td>
								<a class="btn btn-success" href="/pembelian/{{$data->id}}/edit"><i class="fa fa-btn fa-edit"></i>Edit</a>
							</td>
							<td>
								<a class="btn btn-primary" href="/pembelian/{{$data->id}}"><i class="fa fa-btn fa-info-circle"></i>Show</a>
							</td>
							<td>
								<form action="{{route('pembelian.destroy', $data->id)}}" method="POST">
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
</div>
@endsection