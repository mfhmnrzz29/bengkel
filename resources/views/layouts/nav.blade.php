
		<div class="btn-group-vertical">
			<button type="button" class="btn btn-info"><a href="/barang">
			<i class="fa fa-btn fa-cubes"></i> Data Barang</a></button>
		
			<button type="button" class="btn btn-info"><a href="/jasa">
			<i class="fa fa-btn fa-wrench"></i> Data Jasa      </a></button>
			
			<button type="button" class="btn btn-info"><a href="/supplier">
			<i class="fa fa-btn fa-cart-plus"></i> Data Supplier</a></button>

			<button type="button" class="btn btn-info"><a href="/pelanggan">
			<i class="fa fa-btn fa-child"></i> Data Pelanggan</a></button>
		
			<button type="button" class="btn btn-info"><a href="/pembelian">
			<i class="fa fa-btn fa-arrow-circle-down"></i> Data Pembelian</a></button>
		
			<button type="button" class="btn btn-info"><a href="/penjualan">
			<i class="fa fa-btn fa-arrow-circle-up"></i> Data Penjualan</a></button>

			@role('owner')
			<button type="button" class="btn btn-info"><a href="/karyawan">
			<i class="fa fa-btn fa-male"></i> Data Karyawan</a></button>

			<button type="button" class="btn btn-info"><a href="/laporanpenjualan">
			<i class="fa fa-btn fa-level-up"></i> Laporan Penjualan</a></button>

			<button type="button" class="btn btn-info"><a href="/laporanpembelian">
			<i class="fa fa-btn fa-level-down"></i> Laporan Pembelian</a></button>
			@endrole
		</div>	


