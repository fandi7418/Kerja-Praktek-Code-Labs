@extends('app')


@section('content')

<h1 style="font-family: bebas neue; letter-spacing:2px">Create Note</h1>
<hr />

@include('note/_form', ['method' => 'POST', 'url' => 'note'])

@stop