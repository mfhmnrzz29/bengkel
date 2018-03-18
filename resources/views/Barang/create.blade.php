@extends('layouts.data')
@section('content')
		<div class="panel panel-primary">
			<div class="panel-heading">Data Barang - Tambah
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
			@include('layouts._flash')	
			@if($errors->any())
			<div class="flash alert-danger">
				@foreach($errors->all() as $err)
					<li><span>{{ $err }}</span></li>
				@endforeach
			</div>
			@endif

				<form action="{{route('barang.store')}}" method="post">
					{{csrf_field()}}

					<div class="table-repsonsive">
					<table id="item_table" class="table table-bordered">
						<tr id="last">
							<th>Kode Barang</th>
							<th>Jenis Barang</th>
							<th>Harga Beli</th>
							<th>Harga Jual</th>
							<th>Jumlah Barang</th>
							<th>Satuan</th>
							<th>Nama Supplier</th>
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
		</div>
@endsection
<script>
		function addrow(){
			var no = $('#item_table tr').length;
			var html = '';
			html +='<tr id="row_'+no+'">';
			html +='<td><input type="text" name="kode_barang[]" class="form-control kode_barang"/></td>';
			html +='<td><input type="text" name="nama_barang[]" class="form-control nama_barang"/></td>';
			html +='<td><input type="text" name="harga_beli[]" class="form-control harga_beli"/></td>';
			html +='<td><input type="text" name="harga_jual[]" class="form-control harga_jual"/></td>';
			html +='<td><input type="text" name="jumlah_barang[]" class="form-control jumlah_barang"/></td>';
			html +='<td><input type="text" name="satuan[]" class="form-control satuan"/></td>';
			html +='<td><select name="id_supplier[]" class="form-control">@foreach($supplier as $data)<option value="{{$data->id}}">{{$data->nama}}</option>@endforeach</select></td>';
			html +='<td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+ no +')"> Hapus</button></td></tr>';
			$('#last').after(html);
			
		}
		function remove(no){
			$('#row_'+no).remove();
		}
</script>