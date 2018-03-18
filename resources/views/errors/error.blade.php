@extends('layouts.error')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Peringatan! Jumlah pesanan melebihi stok!</div>

                <div class="panel-body">
                    <a href="{{ URL::previous() }}">Kembali ke halaman transaksi</a>
                </div>
        </div>
    </div>
</div>
@endsection
