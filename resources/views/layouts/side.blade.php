<div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('template/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li class="treeview">
          <li class="{{Request::is('home') ? 'active':''}}"><a href="{{url('home')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('barang')}}"><i class="fa fa-btn fa-cubes"></i> Data Barang</a></li>
            <li><a href="{{url('jasa')}}"><i class="fa fa-btn fa-wrench"></i> Data Jasa</a></li>
            <li><a href="{{url('supplier')}}"><i class="fa fa-btn fa-cart-plus"></i> Data Supplier</a></li>
            @role('owner')
            <li><a href="{{url('karyawan')}}"><i class="fa fa-btn fa-male"></i> Data Karyawan</a></li>
            @endrole
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-btn fa-money"></i>
            <span>Data Transaksi</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('pembelian')}}"><i class="fa fa-btn fa-arrow-circle-down"></i> Data Pembelian</a></li>
            <li><a href="{{url('penjualan')}}"><i class="fa fa-btn fa-arrow-circle-up"></i> Data Penjualan</a></li>
          </ul>

          @role('owner')
          <li class="treeview">
          <a href="#">
            <i class="fa fa-btn fa-file"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('laporanpembelian')}}"><i class="fa fa-btn fa-level-down"></i> Laporan Pembelian</a></li>
            <li><a href="{{url('laporanpenjualan')}}"><i class="fa fa-btn fa-level-up"></i> Laporan Penjualan</a></li>
          </ul>
        </li>
        @endrole