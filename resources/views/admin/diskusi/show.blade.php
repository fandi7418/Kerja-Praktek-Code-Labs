@extends('admin/layout/app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br />
        <h1 style="font-family: bebas neue; margin-bottom:10px; letter-spacing:1px" class="font-effect-shadow-multiple">Diskusi </h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Product</th>
                    <th>Komentar</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($discussions as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->product_id }}</td>
                <td>{{ $d->comment }}</td>
                <td>
                    <span data-toggle="modal" data-target="#delete-modal-{{$d->id}}" data-adminname="{{$d->comment}}" data-id="{{$d->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span></td>
                </td>
                @include("admin.diskusi.delete")
            </tr>
            @endforeach
        </table>
    </div>
</div>

@stop