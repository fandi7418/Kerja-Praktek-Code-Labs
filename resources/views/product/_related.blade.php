<h3 class="font-effect-shadow-multiple" align="center" style="font-family: bebas neue; font-size:30px">Produk Yang berhubungan</h3>
<hr />
<div class="row">
	@foreach ($related as $p)
	<div class="col-md-3">
		@include('product._single')
	</div>
	@endforeach
</div>