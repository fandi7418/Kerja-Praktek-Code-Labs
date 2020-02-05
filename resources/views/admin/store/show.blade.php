@extends('admin/layout/app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br />
        <h1 style="font-family: bebas neue; margin-bottom:10px; letter-spacing:1px" class="font-effect-shadow-multiple">Toko </h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Nama Toko</th>
                    <th>Deskripsi</th>
                    <th>Alamat</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Lokasi</th>
                    <th>Tagline</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Instagram</th>
                    <th>Web</th>
                    <th>Mobile</th>
                    <th>Wa</th>
                    <th>Photo profil</th>
                    <th>Photo cover</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($stores as $s)
            <tr>
                <td>{{ $s->user_id }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->description }}</td>
                <td>{{ $s->address }}</td>
                <td>{{ $s->phone }}</td>
                <td>{{ $s->email }}</td>
                <td>{{ $s->status }}</td>
                <td>{{ $s->lokasi_id }}</td>
                <td>{{ $s->tagline }}</td>
                <td>{{ $s->facebook }}</td>
                <td>{{ $s->twitter }}</td>
                <td>{{ $s->instagram }}</td>
                <td>{{ $s->web }}</td>
                <td>{{ $s->mobile }}</td>
                <td>{{ $s->wa }}</td>
                <td>{{ $s->pp }}</td>
                <td>{{ $s->cover }}</td>
                <td>
                    <span data-toggle="modal" data-target="#delete-modal-{{$s->id}}" data-username="{{$s->name}}" data-id="{{$s->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span></td>
                </td>
                @include("admin.store.delete")
            </tr>
            @endforeach
        </table>
    </div>
</div>

@stop