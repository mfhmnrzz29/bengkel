@extends('layouts.data')
@section('content')	
<div class="box">
            <div class="box-header">
              <center><h3 class="box-title">Data Barang</h3></center><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                <thead>
                <tr>
                  <th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Harga Beli</th>
							<th>Harga Jual</th>
							<th>Stok</th>
						
							<th>Aksi</th>
							<th style="display: none;"></th>
                            
                </tr>
                </thead>
                <tbody>
         @foreach($barang as $data)
						<tr>
							<td>{{$data->kode_barang}}</td>
							<td>{{$data->nama_barang}}</td>
							<td>Rp. {{number_format($data->harga_beli)}},-</td>
							<td>Rp. {{number_format($data->harga_jual)}},-</td>
							<td>{{$data->jumlah_barang}} {{$data->satuan}}</td>
							
							<td>
								<a href="/barang/{{$data->id}}/edit"> Edit</a> </td>
								<td>
								<form class="delete" action="{{route('barang.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<input type="submit" value="Delete" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" style="background: none; border: none; outline: none; color:#0000EE;">
									{{csrf_field()}}
								</form>
							</td>
						</tr>
						@endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>		
@endsection