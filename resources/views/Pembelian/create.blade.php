@extends('layouts.data')
@section('content')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<div class="panel panel-primary">
			<div class="panel-heading">Data Pembelian - Create
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
				<form action="{{route('pembelian.store')}}" method="post" id="insert_form">
					{{csrf_field()}}

					<div class="table-repsonsive">
					<table id="item_table" class="table table-bordered">
						<tr id="last">
							<th>Jenis Barang</th>
							<th>Jumlah</th>
							<th>Supplier</th>
							<th><button type="button" name="add" class="btn btn-success btn-sm add" onclick="addrow()">Tambah</button></th>
						</tr>

					</table>
					<br>
					<div align="center">
						<input type="submit" name="submit" class="btn btn-info" value="Simpan">
					</div>
					</div>
				</form>
				</div>
			</div>
@endsection

<script>
		function addrow(){
			var no = $('#item_table tr').length;
			var html = '';
			html +='<tr id="row_'+no+'">';
			html +='<td><select name="id_barang[]" class="form-control">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>';
			html +='<td><input type="text" name="jumlah[]" class="form-control jumlah"/></td>';
			html +='<td><select name="id_supplier[]" class="form-control">@foreach($supplier as $data)<option value="{{$data->id}}">{{$data->nama}}</option>@endforeach</select></td>';
			html +='<td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+ no +')"> Hapus</button></td></tr>';
			$('#last').after(html);
			
		}
		function remove(no){
			$('#row_'+no).remove();
		}
	
</script>