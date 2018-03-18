			<center><h1> Laporan Pembelian Barang</h1></center>

			<table border="1" width="100%">
			<thead>
						<tr>
							<th>No</th>
							<th>Tanggal dan Waktu</th>
							<th>Jumlah</th>
							<th>Supplier</th>
							<th>Total Harga</th>
						</tr>
						</thead>
					<?php
					$no = 1;
					?>
						@foreach($pembelian as $data)
						<tbody>
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->created_at}}</td>
							<td>{{$data->jumlah}} {{$data->barang->satuan}}</td>
							<td>{{$data->supplier->nama}}</td>
							<td>Rp.{{number_format($data->total_harga)}},-</td>
						</tr>
						</tbody>
						@endforeach
				</table>
				Jumlah uang keluar dari tanggal {{$a}} sampai {{$b}}: Rp.{{number_format($sum)}},-