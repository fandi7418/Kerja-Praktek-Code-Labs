@extends('admin/layout/app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br />
        <h1 style="font-family: bebas neue; margin-bottom:10px; letter-spacing:1px" class="font-effect-shadow-multiple">Produk </h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Toko</th>
                    <th>User</th>
                    <th>Gambar</th>
                    <th>Status</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($products as $d)
            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->description }}</td>
                <td>{{ $d->price }}</td>
                <td>{{ $d->store_id }}</td>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->image  }}</td>
                <td>{{ $d->status }}</td>


                <td>
                    <span data-toggle="modal" data-target="#delete-modal-{{$d->id}}" data-username="{{$d->name}}" data-id="{{$d->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span></td>
                </td>
                @include("admin.produk.delete")
            </tr>
            @endforeach
        </table>
    </div>
</div>

@stop