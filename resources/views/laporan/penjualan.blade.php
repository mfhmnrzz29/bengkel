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
			<form action="{{url('laporanpenjualan/detail')}}" method="post">
			{{csrf_field()}}
			<label>Dari Tanggal</label>
			<input type="date" name="a" required="">
			<label>Sampai Tanggal</label>
			<input type="date" name="b" required="">
			<input type="submit" name="submit" class="btn btn-info" value="Submit">
			</form>
				<table class="table">
			
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Nama Pelanggan</th>
							<th>Total</th>
						</tr>
					
				</table>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection