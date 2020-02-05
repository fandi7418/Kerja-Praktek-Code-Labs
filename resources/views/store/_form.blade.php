{!! Form::model($store, ['class' => 'form-horizontal', 'method' => $method, 'url' => $url, 'files' => true]) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('name', $store->name, ['class' => 'form-control', 'placeholder' => 'Store Name']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tagline', 'Tagline:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tagline', $store->tagline, ['class' => 'form-control', 'placeholder' => 'Tagline']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Deskripsi:', ['class' => 'col-md-2 control-label']) !!}	
		<div class="col-md-10">
			{!! Form::textarea('description', $store->description, ['class' => 'form-control', 'placeholder' => 'Store Description', 'rows' => 3]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('img_pp', 'Foto Profile:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::file('img_pp') !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('img_cover', 'Cover:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::file('img_cover') !!}	
		</div>
	</div>

	<h3 style="font-family: bebas neue; letter-spacing:2px; color:black; font-size:32px; margin-top:35px" class="text-muted">Alamat</h3><hr />

	<div class="form-group">
		{!! Form::label('lokasi_id', 'Kota:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('lokasi_id', App\Lokasi::listKota(), $store->lokasi_id, ['class' => 'form-control', 'id' => 'lokasi_id', 'data-placeholder' => 'Pilih Kota']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('address', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('address', $store->address, ['class' => 'form-control', 'placeholder' => 'Alamat', 'rows' => 3]) !!}	
		</div>
	</div>

	<h3 style="font-family: bebas neue; font-size:32px; color:black; letter-spacing:2px; margin-top:35px" class="text-muted">Kontak</h3><hr />

	<div class="form-group">
		{!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('email', $store->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('phone', 'Telepon:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('phone', $store->phone, ['class' => 'form-control', 'placeholder' => 'Telepon']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('mobile', 'Nomor HP:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('mobile', $store->mobile, ['class' => 'form-control', 'placeholder' => 'Nomor HP']) !!}	
		</div>
	</div>
	
	<div class="form-group">
		{!! Form::label('wa', 'Whatsapp:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('wa', $store->wa, ['class' => 'form-control', 'placeholder' => 'Whatsapp']) !!}	
		</div>
	</div>

	<h3 style="font-family: bebas neue; font-size:32px; color:black; margin-top:35px" class="text-muted">Sosial Media</h3><hr />

	<div class="form-group">
		{!! Form::label('facebook', 'Facebook:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('facebook', $store->facebook, ['class' => 'form-control', 'placeholder' => 'Facebook']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('twitter', 'Twitter:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('twitter', $store->twitter, ['class' => 'form-control', 'placeholder' => 'Twitter']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('instagram', 'Instagram:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('instagram', $store->instagram, ['class' => 'form-control', 'placeholder' => 'Instagram']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('web', 'Web:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('web', $store->web, ['class' => 'form-control', 'placeholder' => 'Web']) !!}	
		</div>
	</div>


	<div class="form-group">
		{!! Form::label('status', 'Status:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('status', $store->statuses, $store->status, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<hr />

	<div style="font-family: bebas" class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Save', ['class' => 'btn btn-warning', 'style' => 'font-size:16px']) !!}
		</div>
	</div>


{!! Form::close() !!}

@section('css')
<link href="/select2/dist/css/select2.min.css" rel="stylesheet">
@stop

@section('script')

<script type="text/javascript" src="/select2/dist/js/select2.min.js"></script>

<script type="text/javascript">
	$('#lokasi_id').select2();
</script>

@stop