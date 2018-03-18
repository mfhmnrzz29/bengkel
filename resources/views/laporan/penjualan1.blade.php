				<center><h1> Laporan Penjualan Barang</h1></center>
				<table border="1" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal dan Waktu</th>
							<th>Jumlah</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					?>
						@foreach($penjualan as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->created_at}}</td>
							<td>{{$data->jumlah}} {{$data->barang->satuan}}</td>
							<td>Rp.{{number_format($data->total_harga)}},-</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				Jumlah uang masuk dari tanggal {{$a}} sampai {{$b}}: Rp.{{ number_format($sum)}},-