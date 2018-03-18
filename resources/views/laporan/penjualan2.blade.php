@extends('layouts.data')
@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">Laporan Penjualan
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{url('laporanpenjualan/detail2')}}" method="post">
					{{csrf_field()}}
						<label>Dari Tanggal</label>
							<input type="date" name="a" value="{{$a}}" readonly="">
						<label>Sampai Tanggal</label>
							<input type="date" name="b" value="{{$b}}" readonly="">
							<input type="submit" name="submit" class="btn btn-info" value="Cetak PDF">
							</form>
							<a href="{{ URL::to('laporanpenjualan/downloadExcel/xls') }}"><button class="btn btn-success">Cetak Excel</button></a>
							<center><h3>Laporan Penjualan</h3><br>
								<h6>Dari tanggal {{$a}} sampai tanggal {{$b}}</h6></center>
								<table class="table" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal dan Waktu</th>
							<th>Jumlah</th>
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
							<td>{{$data->jumlah}} {{$data->barang->satuan}}</td>
							<td>Rp.{{number_format($data->total_harga)}},-</td>
						</tr>
						@endforeach
						<tr>
							<td></td>
							<td></td>
							<td><b>Total : </b></td>
							<td><b>Rp.{{number_format($sum)}},-</b></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
@endsection