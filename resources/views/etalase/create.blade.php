@extends('app')


@section('content')

<h1 style="font-family: bebas neue; letter-spacing:2px">Create Etalase</h1>
<hr />

@include('etalase/_form', ['method' => 'POST', 'url' => 'etalase'])

@stop