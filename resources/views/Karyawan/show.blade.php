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
			<div class="panel-heading">Data Karyawan - Detail
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('karyawan.update', $karyawan->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Username</label>
						<input type="text" name="name" class="form-control" required="" value="{{$karyawan->name}}" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Alamat Email</label>
						<input type="text" name="email" class="form-control" value="{{$karyawan->email}}" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Password</label>
						<input type="text" name="password" class="form-control" value="{{$karyawan->password}}" readonly="">
					</div>
				</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection