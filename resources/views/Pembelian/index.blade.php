@extends('layouts.data')
@section('content')	
<div class="box">
            <div class="box-header">
              <center><h3 class="box-title">Data Pembelian</h3></center><br>
            <a href="{{url('barang/create')}}" class="btn btn-primary">+Tambah Barang Baru</a>
            <a href="pembelian/create" class="btn btn-primary">+Tambah Stok</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                <thead>
                <tr>
							<th>Tanggal dan Waktu</th>
							<th>Jumlah</th>
							<th>Supplier</th>
							
							<th>Aksi</th>
							<th style="display: none;"></th>                        
                </tr>
                </thead>
                <tbody>
         <?php
					$no = 1;
					?>
						@foreach($pembelian as $data)
						<tr>
							
							<td>{{$data->created_at}}</td>
							<td>{{$data->jumlah}} {{$data->barang->satuan}}</td>
							<td>{{$data->supplier->nama}}</td>
							
							<td>
								<a href="/pembelian/{{$data->id}}/edit"> Detail</a> </td>
								<td>
								<form class="delete" action="{{route('pembelian.destroy', $data->id)}}" method="POST">
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