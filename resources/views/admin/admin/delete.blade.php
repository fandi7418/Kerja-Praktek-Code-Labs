<!-- modal-delete -->
<div class="modal modal-edit fade" id="delete-modal-{{$admin->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" align="center"><b>Delete admin</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" action="{{ url('/admin/admin/destroy/' .$admin->id)}}" method="get">
                {{csrf_field()}}
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{$admin->id}}">
                    <input type="hidden" name="email" value="{{$admin->email}}">
                    <h5>Apakah Kamu Yakin Ingin Menghapus Pengguna Dengan Nama "{{$admin->name}}"</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>