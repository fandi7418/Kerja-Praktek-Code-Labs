@extends('app')


@section('content')
<div class="col-md-12">
    <div class="col-md-6">
        <h1 style="font-family: bebas; font-size:38px; letter-spacing:1px">{{ $etalase->name }}</h1>
        @if (Auth::check() && Auth::user()->id == $etalase->user_id)
        <div align="left" style="margin-bottom: 30px; margin-top:10px">
            <span data-toggle="modal" data-target="#create-modal"><a style="width:150px; height:30px" href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-warning"><i style="font-size: 15px" class="fa fa-fw fa-plus-circle"></i> <b style="font-size:15px; font-family:bebas" class="hover-effect">Tambah Barang </b></a></span>
            <span data-toggle="modal" data-target="#create-modal"><a style="width:150px; height:30px" href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-warning"><i style="font-size: 15px" class="fa fa-fw fa-plus-circle"></i> <b style="font-size:15px; font-family:bebas" class=" hover-effect">Edit Isi Etalase </b></a></span>
        </div>
        @endif
    </div>
</div>



<div class="row col-md-9">

    @foreach ($etalase->products as $p)

    <div class="col-md-3">
        @include('etalase.product')
    </div>

    @endforeach

</div>
<div class="col-md-3">


    @include("etalase.add")
    <H2 align="center" style="font-family: bebas neue; font-size:35px; margin-top:-5px; letter-spacing:1px" class="font-effect-shadow-multiple">Deskripsi Etalase</H1>
        <h2 align="center" style="font-family: bebas; font-size:30px; letter-spacing:1px">
            {{ $etalase->description }}
        </h2>
</div>

@stop