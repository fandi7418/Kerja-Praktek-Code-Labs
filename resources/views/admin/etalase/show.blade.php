@extends('admin/layout/app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br />
        <h1 style="font-family: bebas neue; margin-bottom:10px; letter-spacing:1px" class="font-effect-shadow-multiple">Etalase </h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Toko</th>
                    <th>User</th>
                    <th>Nama Etalase</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($etalase as $r)
            <tr>
                <td>{{ $r->store_id }}</td>
                <td>{{ $r->user_id }}</td>
                <td>{{ $r->name }}</td>
                <td>{{ $r->description }}</td>


            </tr>
            @endforeach
        </table>
    </div>
</div>

@stop