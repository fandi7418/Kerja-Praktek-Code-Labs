@extends('app')


@section('content')
<h1>Manage Stores</h1>
<hr />

<table id="store-list" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Nama Toko</th>
			<th>Deskripsi Toko</th>
			<th>Alamat</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Status</th>

		</tr>
	</thead>
</table>

@stop

@section('script')

<script type="text/javascript">
	$('.delete').click(function() {
		if (confirm('Anda yakin?')) {
			return true;
		};
		return false;
	});

	$(document).ready(function() {

		$('#store-list').DataTable({
			processing: true,
			serverSide: true,
			ajax: '/store/list',
			columns: [{
					data: 'name'
				},
				{
					data: 'description'
				},
				{
					data: 'address'
				},
				{
					data: 'phone'
				},
				{
					data: 'email'
				},
				{
					data: 'status'
				},

			]
		});

	});
</script>

@stop