<div class="modal modal-edit fade" id="create-modal">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ url('/admin/admin/create')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Password</label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Komfirmasi Password</label>
                                </div>
                                <div class="col-sm-9">
                                    <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
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