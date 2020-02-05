<br /><br />
<div>
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Ulasan</a></li>
		<li role="presentation"><a href="#discussion" aria-controls="discussion" role="tab" data-toggle="tab">Diskusi</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="review">

			<br />

			@if (count($product->reviews))

			@include('review.index')

			@else

			<div class="alert alert-warning text-center">
				<strong style="font-family: bebas; font-size:18px">Belum ada review</strong>
			</div>

			@endif

			@if (Auth::check())

			@include('review._form')

			@else

			<a style="font-family: bebas; font-size:18px" href="/auth/login" class="btn btn-warning">Silahkan login untuk memberikan review</a>

			@endif

		</div>

		<div role="tabpanel" class="tab-pane" id="discussion">

			<br />

			@if (count($product->discussions))

			@include('discussion.index')

			@else

			<div class="alert alert-warning text-center">
				<strong style="font-family: bebas; font-size:18px">Belum ada diskusi</strong>
			</div>

			@endif

			@if (Auth::check())

			@include('discussion._form')

			@else

			<a style="font-family: bebas; font-size:18px" href="/auth/login" class="btn btn-warning">Silahkan login untuk diskusi</a>

			@endif

		</div>

	</div>
</div>