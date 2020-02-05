{!! Form::model($product, ['url' => $url, 'class' => 'form-horizontal', 'files' => true, 'method' => $method]) !!}
<div class="form-group">
	{!! Form::label('store_id', 'Toko:', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::select('store_id', Auth::user()->stores()->lists('name', 'id'), $product->store_id, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('kategori_id', 'Kategori:', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-10">
		<select class="form-control" name="kategori_id" id="kategori_id">

			@foreach ($kategori as $k)
			<option value="{{$k->id}}">{{$k->nama}}</option>

			@endforeach
		</select>
	</div>
</div>
<!-- <div class="form-group">
	<div class="col-md-10 form-control">
		<select name="kategori" id="">
			@foreach ($kategori as $k)
			<option value="{{$k->id}}">{{$k->nama}}</option>

			@endforeach
		</select>
	</div>
</div> -->

<div class="form-group">
	{!! Form::label('name', 'Name:', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Product Name']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('description', 'Description:', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::textarea('description', $product->description, ['class' => 'form-control', 'placeholder' => 'Product Description', 'rows' => 3]) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('price', 'Price:', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('price', $product->price, ['class' => 'form-control', 'placeholder' => 'Price']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('img', 'Image:', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::file('img') !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('status', 'Status:', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::select('status', $product->statuses, $product->status, ['class' => 'form-control']) !!}
	</div>
</div>

<hr />

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		{!! Form::submit('Save', ['class' => 'btn btn-warning', 'style'=>'font-size:16']) !!}
	</div>
</div>

{!! Form::close() !!}