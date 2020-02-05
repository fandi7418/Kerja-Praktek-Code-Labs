@extends('admin/layout/app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br />
        <h1 style="font-family: bebas neue; margin-bottom:10px; letter-spacing:1px" class="font-effect-shadow-multiple">Note </h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Toko</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>User</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($notes as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->store_id }}</td>
                <td>{{ $d->title }}</td>
                <td>{{ $d->content }}</td>
                <td>{{ $d->published }}</td>


            </tr>
            @endforeach
        </table>
    </div>
</div>

@stop