@extends('app')


@section('content')

<div style="background-image: url(/uploads/{{ $store->cover }});background-size:cover; height:300px; ">
</div>
<br />

@if (Auth::check() && Auth::user()->id == $store->user_id)

<a href="/store/{{ $store->id }}/edit" class="btn btn-warning pull-right" style="font-family: bebas">Update Toko</a>

@endif

<div class="row">
	<div class="col-md-2">
		<img src="/uploads/{{ $store->pp }}" class="img-thumbnail" />
	</div>

	<div class="col-md-10">
		<h1 style="font-family: bebas">{{ $store->name }} <small>{{ $store->tagline }}</small></h1>
	</div>
</div>

<br />

<div class="alert alert-warning">
	<blockquote><i>"{!! nl2br($store->description) !!}"</i></blockquote>
</div>

<div class="text-muted">
	<span class="fa fa-home"></span> {{ $store->address }} |
	<a href="/lokasi/{{ $store->lokasi->id }}"><span class="fa fa-map-marker"></span> {{ $store->lokasi->nama }}</a><br />

	<span class="fa fa-phone"></span> {{ $store->phone }} |
	<span class="fa fa-mobile"></span> {{ $store->mobile }} |

	<span class="fa fa-whatsapp"></span> {{ $store->wa }} |
	<span class="fa fa-envelope-o"></span> <a href="mailto:{{ $store->email }}">{{ $store->email }}</a><br />

	<span class="fa fa-facebook"></span> <a href="{{ $store->facebook }}" target="_blank">{{ $store->facebook }}</a> |
	<span class="fa fa-twitter"></span> <a href="{{ $store->twitter }}" target="_blank">{{ $store->twitter }}</a> |
	<span class="fa fa-instagram"></span> <a href="{{ $store->instagram }}" target="_blank">{{ $store->instagram }}</a> |
	<span class="fa fa-globe"></span> <a href="{{ $store->web }}" target="_blank">{{ $store->web }}</a>
</div>

<hr />

<div class="row">
	<div class="col-md-4">

		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 style="font-family: bebas; font-size:19px" class="panel-title">CATATAN</h3>
			</div>
			<div class="list-group">

				@foreach ($store->notes as $n)
				@if (Auth::check() && Auth::user()->id == $store->user_id)
				<span data-toggle="modal" data-target="#delete-modal-{{$n->id}}" data-adminname="{{$n->name}}" data-id="{{$n->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span></td>
				@endif
				<a class="list-group-item" href="/note/{{ $n->id }}">{{ $n->title }}</a>
				@include("store.deletenote")
				@endforeach

				@if (Auth::check() && Auth::user()->id == $store->user_id)

				<a style="font-family: bebas" class="list-group-item list-group-item-danger" href="/note/create"><i style="margin-right: 7px" class="fa fa-plus"></i> BUAT CATATAN</a>

				@endif

			</div>
		</div>

		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 style="font-family: bebas; font-size:19px" class="panel-title">Etalase</h3>
			</div>
			<div class="list-group">

				@foreach ($store->etalases as $e)
				@if (Auth::check() && Auth::user()->id == $store->user_id)
				<span data-toggle="modal" data-target="#delete-modal-{{$e->id}}" data-adminname="{{$e->name}}" data-id="{{$e->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span></td>
				@endif
				<a class="list-group-item" href="/etalase/{{ $e->id }}">
					<h4 class="list-group-item-heading">{{ $e->name }}<span class="badge pull-right"></span></h4>
					<p class="list-group-item-text">{{ $e->description }}</p>

				</a>

				@include("store.deleteetalase")
				@endforeach

				@if (Auth::check() && Auth::user()->id == $store->user_id)

				<a style="font-family: bebas" class="list-group-item list-group-item-danger" href="/etalase/create"><i style="margin-right: 7px" class="fa fa-plus"></i> BUAT ETALASE</a>

				@endif

			</div>
		</div>


	</div>
	<div class="col-md-8">

		<div class="well">
			<div class="row">

				<div class="col-md-6 text-center">
					<a style="font-family: bebas" class="list-group-item list-group-item-danger" href="/product/create"><i style="margin-right: 7px" class="fa fa-plus"></i> MASUKAN PRODUK</a>

				</div>
				<div class="col-md-6 text-center">

					<span data-toggle="modal" data-target="#delete-modal" data-adminname="" data-id=""><a style="font-family: bebas" class="list-group-item list-group-item-success" href="#"><i style="margin-right: 7px" class="fa fa-plus"></i> LIHAT PRODUK ANDA</a> <b class="hover-effect"></b></a></span></td>
				</div>
			</div>
		</div>

		<div class="row">

			@foreach ($store->products as $p)
			@include("store.updateetalase")
			@include("store.lihat")
			@include("store.delete")
			<div class="col-md-3">
				@include('product._single')
			</div>

			@endforeach

		</div>

	</div>
</div>

@stop