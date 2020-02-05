@extends('app')


@section('content')
<div class="col-md-12" style="margin-bottom: 20px">
    <div class="col-md-6">
        <h1 class="font-effect-shadow-multiple" style="font-family: bebas neue; font-size:50px; letter-spacing:2px"> <u>{{ $kategori->nama }} </u></h1>

    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="well">
            <div class="row">
                <div style="font-family: bebas; font-size:20px" class="col-md-8">
                    {!! Form::open(['class' => 'form-inline']) !!}
                    {!! Form::label('order', 'Urutkan dari:') !!}
                    {!! Form::select('order', ['price' => 'Harga', 'star' => 'rating'], 'price', ['class' => 'form-control','style'=>'font-size:15px']) !!}
                    {!! Form::select('sort', ['asc' => 'Kecil-kebesar', 'desc' => 'Besar- kekecil'], 'asc', ['class' => 'form-control','style'=>'font-size:15px']) !!}
                    {!! Form::submit('Filter', ['class' => 'btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>

        <div class="row ">

            @foreach ($kategori->products as $p)

            <div class="col-md-3">
                @include('kategori.show')
            </div>

            @endforeach

        </div>
    </div>
    <div class="col-md-4">
        <div class="alert alert-warning">
            <h3 align="center" style="color:black; font-family:bebas neue;" class="centered">Temukan Produk yang Anda Cari!</h3>
        </div>

        @include('product/_recommended')
    </div>
</div>

@stop