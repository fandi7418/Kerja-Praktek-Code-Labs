<div class="modal modal-edit fade" id="delete-modal">
    <div class="modal-dialog ">
        <div class="modal-content col-md-12">
            <h1>
                Lihat Produk Anda
            </h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>

                        <th>Kategori</th>
                        <th>Status</th>

                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($store->products as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ $p->price }}</td>

                    <td>{{ $p->kategori_id }}</td>
                    <td>{{ $p->status }}</td>
                    <td>
                        <span data-toggle="modal" data-target="#delete-modal-{{$p->id}}" data-adminname="{{$p->name}}" data-id="{{$p->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></span>
                        <span data-toggle="modal" data-target="#delete-modal-{{$p->id}}" data-adminname="{{$p->name}}" data-id="{{$p->id}}"><a href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-success"> <b class="hover-effect">Edit</b></a></span>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>