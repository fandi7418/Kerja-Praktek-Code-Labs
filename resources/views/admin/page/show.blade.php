@extends('admin/layout/app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br />
        <h1 style="font-family: bebas neue; margin-bottom:10px; letter-spacing:1px" class="font-effect-shadow-multiple"> Page</h1>
        <div align="right">
            <span data-toggle="modal" data-target="#create-modal"><a style="width:100px; height:30px" href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-primary"><i style="font-size: 15px" class="fa fa-fw fa-plus-circle"></i> <b style="font-size:15px" class="hover-effect">CREATE</b></a></span>
        </div>
        <br />
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama Iklan</th>
                    <th>Gambar</th>


                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($page as $d)
            <tr>
                <td>{{ $d->title }}</td>
                <td>{{ $d->body }}</td>


                <td>
                    <span data-toggle="modal" data-target="#delete-modal-{{$d->id}}" data-username="{{$d->title}}" data-id="{{$d->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span></td>
                </td>
                @include("admin.page.delete")
            </tr>
            @endforeach
        </table>
    </div>
</div>
@include("admin.page.add")
@stop