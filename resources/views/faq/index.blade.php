@extends('app')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>Frequently Asked Question</h1>
		<hr />

		<div class="row">

			<div class="form-group col-md-8">
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
					{!! Form::text('faq', null, ['class' => 'form-control', 'placeholder' => 'Type your keyword here']) !!}
				</div>
			</div>


		</div>

		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			@foreach($faqs as $f)

			<div class="panel panel-success">
				<div class="panel-heading" role="tab" id="heading{{ $f->id }}">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $f->id }}" aria-expanded="true" aria-controls="collapse{{ $f->id }}">
							{{ $f->question }}
						</a>
					</h4>
				</div>
				<div id="collapse{{ $f->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $f->id }}">
					<div class="panel-body">
						{!! nl2br($f->answer) !!}
					</div>


				</div>
			</div>

			@endforeach

			{!! $faqs->render() !!}
		</div>
	</div>

	<div class="col-md-4">
		<div class="alert alert-warning centered">
			<h3>Cari Solusi Masalahmu di Halaman ini! </h3>
		</div>
	</div>
</div>

@stop

@section('script')

<script type="text/javascript">
	$('.delete').click(function() {
		if (confirm('Anda yakin?')) {
			return true;
		};
		return false;
	});
</script>

@stop