@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<center><h1>Data Supplier</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Data Supplier
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('supplier.update', $supplier->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Nama Supplier</label>
						<input type="text" name="nama" class="form-control" required="" value="{{$supplier->nama}}" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Alamat</label>
						<textarea name="alamat" class="form-control" required="" readonly="">{{$supplier->alamat}}</textarea>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
@endsection