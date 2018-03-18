@extends('layouts.data')
@section('content')	
<div class="box">
            <div class="box-header">
              <center><h3 class="box-title">Data Jasa</h3></center><br>
            <a href="jasa/create" class="btn btn-primary">+Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                <thead>
                <tr>
							<th>Jenis Jasa</th>
							<th>Harga</th>
							<th>Aksi</th>
							<th style="display: none;"></th>
                            </tr>
                </thead>
                <tbody>
         @foreach($jasa as $data)
						<tr>
							<td>{{$data->nama}}</td>
							<td>Rp.{{number_format($data->harga)}},-</td>
							<td>
								<a href="/jasa/{{$data->id}}/edit"> Edit</a> </td>
								<td>
								<form class="delete" action="{{route('jasa.destroy', $data->id)}}" method="POST">
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