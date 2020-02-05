@extends('admin/layout/app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br />
        <h1 style="font-family: bebas neue; margin-bottom:10px; letter-spacing:1px" class="font-effect-shadow-multiple">Manajemen Admin </h1>
        <div align="right">
            <span data-toggle="modal" data-target="#create-modal"><a style="width:100px; height:30px" href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-primary"><i style="font-size: 15px" class="fa fa-fw fa-plus-circle"></i> <b style="font-size:15px" class="hover-effect">CREATE</b></a></span>
        </div>
        <br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($admin as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->password }}</td>

                <td>
                    <span data-toggle="modal" data-target="#delete-modal-{{$admin->id}}" data-adminname="{{$admin->name}}" data-id="{{$admin->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span></td>
                </td>
                @include("admin.admin.delete")
            </tr>
            @endforeach
        </table>
    </div>
</div> @include("admin.admin.add")

@stop