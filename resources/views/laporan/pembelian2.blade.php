@extends('layouts.data')
@section('content')	
		<div class="panel panel-primary">
			<div class="panel-heading">Laporan Pembelian
			<div class="panel-title pull-right"><a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
			<form action="{{url('laporanpembelian/detail2')}}" method="post">
			{{csrf_field()}}
			<label>Dari Tanggal</label>
			<input type="date" name="a" value="{{$a}}" readonly="">
			<label>Sampai Tanggal</label>
			<input type="date" name="b" value="{{$b}}" readonly="">
			<input type="submit" name="submit" class="btn btn-info" value="Cetak PDF">
			</form>
							<a href="{{ URL::to('laporanpembelian/downloadExcel/xls') }}"><button class="btn btn-success">Cetak Excel</button></a>
							<center><h3>Laporan Pembelian</h3><br>
								<h6>Dari tanggal {{$a}} sampai tanggal {{$b}}</h6></center>
				<table class="table">
			<thead>
						<tr>
							<th>No</th>
							<th>Tanggal dan Waktu</th>
							<th>Jumlah</th>
							<th>Supplier</th>
							<th>Total Harga</th>
						</tr>
						</thead>
					<?php
					$no = 1;
					?>
						@foreach($pembelian as $data)
						<tbody>
						<tr>
							<td
							>{{$no++}}</td>
							<td>{{$data->created_at}}</td>
							<td>{{$data->jumlah}} {{$data->barang->satuan}}</td>
							<td>{{$data->supplier->nama}}</td>
							<td>Rp.{{number_format($data->total_harga)}},-</td>
						</tr>
						</tbody>
						@endforeach
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><b>Total : </b></td>
							<td><b>Rp.{{number_format($sum)}},-</b></td>
						</tr>
				</table>
				</div>
			</div>
@endsection