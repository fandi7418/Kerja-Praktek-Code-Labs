<!-- modal-delete -->
<div class="modal modal-edit fade" id="delete-modal-{{$e->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" align="center"><b>Delete Etalase</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" action="{{ url('/etalase/destroy/' .$e->id)}}" method="get">
                {{csrf_field()}}
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{$e->id}}">
                    <input type="hidden" name="email" value="{{$e->name}}">
                    <h5>Apakah Kamu Yakin Ingin Menghapus Etalase Dengan Nama "{{$e->name}}"</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>