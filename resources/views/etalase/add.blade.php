<div class="modal modal-edit fade" id="create-modal">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ url('etalase/store_etalase/'.$etalase->id)}}" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            {!! Form::label('product_id', 'Produk:', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10">
                                <select class="form-control" name="product_id" id="product_id">
                                    @foreach ($product as $k)
                                    <option value="{{$k->id}}">{{$k->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>