@extends('layouts.data')
@section('content')
<div class="panel panel-primary">
			<div class="panel-heading">Data Karyawan - Tambah
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
			@if($errors->any())
			<div class="flash alert-danger">
				@foreach($errors->all() as $err)
					<li><span>{{ $err }}</span></li>
				@endforeach
			</div>
			@endif
				<form action="{{route('karyawan.store')}}" method="post">
					{{csrf_field()}}

					<div class="form-group">
						<label class="control-lable">Username</label>
						<input type="text" name="name" class="form-control" required="" >
					</div>
					<div class="form-group">
						<label class="control-lable">Alamat Email</label>
						<input type="text" name="email" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="control-lable">Password</label>
						<input type="text" name="password" class="form-control" required="">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
				</div>
				</div>
@endsection