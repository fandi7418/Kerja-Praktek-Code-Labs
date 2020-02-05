{!! Form::open(['class' => 'form-vertical', 'url' => 'review', 'method' => 'POST']) !!}

{!! Form::hidden('product_id', $product->id) !!}

<p><input class="ui star rating" type="float" min="0" max="5" step="0" name="star" class="rating rating-loading" data-step="0.1"></p>
<p>{!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Tambahkan Ulasan', 'rows' => 3]) !!}</p>

<p>{!! Form::submit('Send', ['class' => 'btn btn-warning', 'style'=>'font-family:bebas; font-size:16px']) !!}</p>

{!! Form::close() !!}