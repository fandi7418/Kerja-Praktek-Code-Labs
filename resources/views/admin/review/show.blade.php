@extends('admin/layout/app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br>
        <div>
            <h1 style="font-family: bebas neue; margin-bottom:10px; letter-spacing:1px" class="font-effect-shadow-multiple">Review </h1>
        </div>
        <br>
        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>ID Produk</th>
                    <th>User</th>
                    <th>Star</th>
                    <th>Komentar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($reviews as $r)
            <tr>
                <td>{{ $r->product_id }}</td>
                <td>{{ $r->user_id }}</td>
                <td>{{ $r->star }}</td>
                <td>{{ $r->comment }}</td>
                <td>
                    <span data-toggle="modal" data-target="#delete-modal-{{$r->id}}" data-username="{{$r->comment}}" data-id="{{$r->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span></td>
                </td>
                @include("admin.review.delete")
            </tr>
            @endforeach
        </table>
    </div>
</div>

@stop