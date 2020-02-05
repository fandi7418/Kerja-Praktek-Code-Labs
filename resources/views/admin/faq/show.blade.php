@extends('admin/layout/app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <br />
        <h1 style="font-family: bebas neue; margin-bottom:10px; letter-spacing:1px" class="font-effect-shadow-multiple">FAQ </h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($faqs as $r)
            <tr>
                <td>{{ $r->question }}</td>
                <td>{{ $r->answer }}</td>

                <td>
                    <span data-toggle="modal" data-target="#delete-modal-{{$r->id}}" data-adminname="{{$r->question}}" data-id="{{$r->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span></td>
                </td>
                @include("admin.faq.delete")
            </tr>
            @endforeach
        </table>
    </div>
</div>
@include("admin.faq.create")

@stop