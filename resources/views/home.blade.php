@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Assalaam Motorsport - Home</div>

                <div class="panel-body">
                    <table>
                        <tr>
                            <th>
                                <a class="btn btn-primary" href="/barang"><i class="fa fa-btn fa-cubes"></i> Data Barang</a>
                            </th>
                            <th>
                                <a class="btn btn-primary" href="/jasa"><i class="fa fa-btn fa-motorcycle"></i> Data Jasa</a>
                            </th>
                            <th>
                                <a class="btn btn-primary" href="/pelanggan"><i class="fa fa-btn fa-child"></i> Data Pelanggan</a>
                            </th>
                            <th>
                                <a class="btn btn-primary" href="/supplier"><i class="fa fa-btn fa-cart-plus"></i> Data Supplier</a>
                            </th>
                            <th>
                                <a class="btn btn-primary" href="/pembelian"><i class="fa fa-btn fa-arrow-circle-down"></i> Data Pembelian</a>
                            </th>
                            <th>
                                <a class="btn btn-primary" href="/penjualan"><i class="fa fa-btn fa-arrow-circle-up"></i> Data Penjualan</a>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
