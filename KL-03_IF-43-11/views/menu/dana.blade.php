@extends('master')


@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Saldo Dana</h1>
        </div><!-- /.col -->
            <div class="col-sm-6">
        {{-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
        </ol> --}}
        </div><!-- /.col -->
  </div><!-- /.row -->

@endsection


@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <div class="inner">
                <h3>Rp.20000</h3>

                <p>Price : Rp.21000</p>
            </div>
            <div class="icon">

            </div>
            <a href="/beli/dana" class="small-box-footer">Beli <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <div class="inner">
                <h3>Rp.50000</h3>

                <p>Price : Rp.51000</p>
            </div>
            <div class="icon">

            </div>
            <a href="/beli/dana" class="small-box-footer">Beli <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <div class="inner">
                <h3>Rp.100000</h3>

                <p>Price : Rp.101000</p>
            </div>
            <div class="icon">

            </div>
            <a href="/beli/dana" class="small-box-footer">Beli <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <div class="inner">
                <h3>Rp.150000</h3>

                <p>Price : Rp.151000</p>
            </div>
            <div class="icon">

            </div>
            <a href="/beli/dana" class="small-box-footer">Beli <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
@endsection
