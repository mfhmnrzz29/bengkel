@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="col-md-3">
        <!--nav-->
                @include('layouts.nav')
            <!--end nav-->
    </div>
    <div class="col-md-9">

            <div class="panel panel-primary">
                <div class="panel-heading">Assalaam Motorsport - Home</div>

                <div class="panel-body">
                    Selamat datang di Assalaam Motorsport, {{ Auth::user()->name }}!
                </div>
        </div>
    </div>
    </div>
    </div> 
</div>
@endsection
