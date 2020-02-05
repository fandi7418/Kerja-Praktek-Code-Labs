@extends('app')

@section('content')

<h1 style="font-family: bebas neue; letter-spacing:2px">Create Product</h1>
<hr />

@include('product/_form', ['url' => 'product', 'method' => 'POST'])

@stop