@extends('app')

@section('content')

<h1>Toko di: {{ $lokasi->nama }}</h1>
<hr />
<div class="col-md-4">
	@foreach ($lokasi->stores as $store)
	<div class="panel panel-warning">
		<div class="panel-body" style="margin-top:-25px ">
			<h1 align="center" class="font-effect-shadow-multiple" style=" color:black; font-family:bebas neue;" class="panel-title">{{ $store->name }} <br /></h1>
			<h4 align="center" class="font-effect-shadow-multiple" style=" color:black; font-family:bebas neue; margin-top:-10px;" class="panel-title">{{ $store->description  }} <br /></h4>
			<hr />
			<div class="text-muted">

				<span class="fa fa-home"></span> {{ $store->address }} <br />
				<span class="fa fa-phone"></span> {{ $store->phone }} <br />
				<span class="fa fa-mobile"></span> {{ $store->mobile }} <br />
				<span class="fa fa-whatsapp"></span> {{ $store->wa }} <br />
				<span class="fa fa-envelope-o"></span> {{ $store->email }} <br />
				<span class="fa fa-facebook"></span> {{ $store->facebook }} <br />
				<span class="fa fa-twitter"></span> {{ $store->instagram }} <br />
				<span class="fa fa-globe"></span> {{ $store->web }} <br />
			</div>


		</div>
	</div>
	@endforeach
</div>
@stop