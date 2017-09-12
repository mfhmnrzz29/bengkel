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
			<div class="panel-heading">Laporan Penjualan
			<div class="panel-title pull-right"></div></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Nama Pelanggan</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					?>
						@foreach($penjualan as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->created_at}}</td>
							<td>{{$data->pelanggan->nama}}</td>
							<td>Rp.{{$data->total_harga}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				Jumlah uang masuk dari tanggal {{$a}} sampai {{$b}}: Rp.{{$sum}}
			</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection