<div class="modal modal-edit fade" id="create-modal">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ url('/admin/page/add')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Nama" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Gambar</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="body" id="body" placeholder="Image" required>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <a href="/admin/pengguna/pengguna"><button type="button" class="btn btn-default pull-left">Close</button></a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>