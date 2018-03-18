@extends('layouts.data')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Assalaam Motorsport - Home</div>

                <div class="panel-body">
                
        <div class="box">
        	<div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pemasukan</span>
              <span class="info-box-number">Rp. {{number_format($sum)}},-</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pengeluaran</span>
              <span class="info-box-number">Rp. {{number_format($sum1)}},-</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Persentase Untung/Rugi</span>
              <span class="info-box-number">{{number_format($a)}}%</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <h5>*Data berdasarkan bulan ini</h5>
  </div>
  </div>
        </div>
@endsection
