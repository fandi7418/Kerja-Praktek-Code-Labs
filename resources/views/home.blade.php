@extends('app')

@section('content')
<div class="main-wrapper">
    <div class="slider">
        @foreach($page as $p)
        <img class="slide slide_current" style="height: 400px" src="{{asset('/iklan/'.$p->body)}}?random=1">


        @endforeach
    </div>
    <div class="arrow arrow_prev">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257.6 451.8">
            <path d="M0,225.9c0-8.1,3.1-16.2,9.3-22.4L203.5,9.3c12.4-12.4,32.4-12.4,44.8,0c12.4,12.4,12.4,32.4,0,44.7L76.4,225.9l171.9,171.9c12.4,12.4,12.4,32.4,0,44.7c-12.4,12.4-32.4,12.4-44.7,0L9.3,248.3C3.1,242.1,0,234,0,225.9z" />
        </svg>
    </div>
    <div class="arrow arrow_next">
        <svg class="arrow arrow_next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257.6 451.8">
            <path d="M248.3,248.3L54,442.6c-12.4,12.4-32.4,12.4-44.7,0c-12.4-12.4-12.4-32.4,0-44.7l171.9-171.9L9.3,54C-3.1,41.7-3.1,21.6,9.3,9.3C21.6-3.1,41.7-3.1,54,9.3l194.3,194.3c6.2,6.2,9.3,14.3,9.3,22.4C257.6,234,254.5,242.1,248.3,248.3z" />
        </svg>
    </div>
</div>
<br>
<!-- Main jumbotron for a primary marketing message or call to action -->
<center><img src="tumbas.png" style="width:1150px;"></center>
<div> <br />
    <center>
        <p><a style="font-family: bebas; margin-top:25px; font-size:20px" class="btn btn-warning btn-lg" href="/product" role="button">Start Shopping &raquo;<img src="{{ asset('/basket.svg') }}" style="width:50px; margin-left:8px;"></a></p>
    </center>
</div>

<div class="row " style="margin-top: 90px">
    <div class="col-md-4" align="center">

        <h1 class="font-effect-shadow-multiple" style="font-family: bebas neue; letter-spacing:2px;">AMAN<img src="{{ asset('/lock.svg') }}" style="width:26px; margin-left:6px;"></h1>
        <p style="font-family: bebas; font-size:16px;">Jual Beli Barang secara AMAN hanya ada di TUMBAS.id</p>
    </div>
    <div class="col-md-4" align="center">
        <h1 class="font-effect-shadow-multiple" style="font-family: bebas neue; letter-spacing:2px;">TERPERCAYA <img src="{{ asset('/medal.svg') }}" style="width:28px; margin-left:1px;"></h1>
        <p style="font-family: bebas; font-size:16px;">Temukan Berbagai Macam pelapak Terpercaya Hanya di TUMBAS.id</p>
    </div>
    <div class="col-md-4" align="center">
        <h1 class="font-effect-shadow-multiple" style="font-family: bebas neue; letter-spacing:2px;">BERKUALITAS <img src="{{ asset('/five.svg') }}" style="width:40px; margin-left:2px; margin-top:-7px;"></h1>
        <p style="font-family: bebas; font-size:16px;">Temukan Barang Baru dan Bekas Berkualitas hanya di TUMBAS.id</p>
        <div style="margin-top:100px;">
        </div>
    </div>
</div>
@stop