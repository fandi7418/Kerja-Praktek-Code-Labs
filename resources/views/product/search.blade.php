@extends('app')

@section('title')

@section('content')


<div class="row" style="margin-bottom: 20px">
    <div class="col-md-8">
        <h1 class="font-effect-shadow-multiple" style="font-family: bebas neue; font-size:50px; letter-spacing:2px"> <u>Hasil Pencarian {{ $keyword }} </u>
    </div>
</div>
<!-- <form action="{{ route('search') }}" method="GET">
    <input type="text" name="keyword" placeholder="Cari Product ..">
    <input type="submit" value="CARI">
</form> -->
<br>
<div class="row">
    <div class="col-md-8">
        <div class="well">
            <div class="row">
                <div class="col-md-7">
                    {!! Form::open(['class' => 'form-inline']) !!}
                    {!! Form::label('order', 'Urutkan dari:') !!}
                    {!! Form::select('order', ['price' => 'harga', 'star' => 'rating'], 'price', ['class' => 'form-control']) !!}
                    {!! Form::select('sort', ['asc' => 'kecil-kebesar', 'desc' => 'besar- kekecil'], 'asc', ['class' => 'form-control']) !!}
                    {!! Form::submit('Filter', ['class' => 'btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>


        <!-- <div class="col-md-5 text-right">
					<a style="color:rgb(240, 173, 78)" href="?view=list"><span class="fa fa-list fa-2x"></span></a>&nbsp;
					<a style="color:rgb(240, 173, 78)" href="?view=list1"><span class="fa fa-th fa-2x"></span></a>
				</div>
			</div>
		</div> -->
        <div class="row">

            @foreach ($products as $p)
            <div class="col-md-3">
                @include('product._single')
            </div>@endforeach
        </div>
    </div>



    <div class="col-md-4">
        <div class="alert alert-warning">
            <h3 align="center" style="color:black; font-family:bebas neue;" class="centered">Temukan Produk yang Anda Cari!</h3>
        </div>

        @include('product/_recommended')
    </div>
</div>



@endsection
@stop