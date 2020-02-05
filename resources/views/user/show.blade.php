@extends('app')

@section('content')

<h1 style=" color:black; font-family:bebas neue;letter-spacing:3px ">Selamat Datang, {{ $user->name }}!</h1>
<hr />
<div class="row">
	<div class="row col-md-8">
		<div class="col-md-2">
			<a style=" font-family:bebas; font-size:15px" href="/user/{{ $user->id }}/edit" class="btn btn-warning form-control">Edit Profile</a>
		</div>


	</div>
	<div class="col-md-4">

		@if (($user->store_id!=0))
		@include('user/toko')
		@else
		<div class="panel panel-warning">
		<div class="panel-heading">	
		<h1 align="center" style="font-family: bebas; font-size:25px; color:black;">Anda Belum Memiliki Toko</h1>
	</div>
	<div class="panel-body">
			<a style=" font-family:bebas; margin-left:100px; font-size:15px; margin-top:1px" href="/store/create" class="btn btn-warning form-control; btn-size:20px">Buka Toko <img src="{{asset('/store.svg')}}" style="width: 20px; margin-left:3px"></a>
		</div>
		</div>
	</div>
		@endif


	</div>
</div>
@stop