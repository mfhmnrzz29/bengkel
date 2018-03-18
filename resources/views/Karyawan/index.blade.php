@extends('layouts.data')
@section('content')	
<div class="box">
            <div class="box-header">
              <center><h3 class="box-title">Data Karyawan</h3></center><br>
            <a href="karyawan/create" class="btn btn-primary">+Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                <thead>
                <tr>
                  <th>No</th>
							<th>Username</th>
							<th>Alamat Email</th>
							<th>Aksi</th>
							<th style="display: none;"></th>                          
                </tr>
                </thead>
                <?php $no = 1;
					?>
                <tbody>
         @foreach($karyawan as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->name}}</td>
							<td>{{$data->email}}</td>
							<td>
								<a href="/karyawan/{{$data->id}}/edit"> Edit</a> </td>
								<td>
								<form class="delete" action="{{route('karyawan.destroy', $data->id)}}" method="POST">
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