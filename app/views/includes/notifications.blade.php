@if ($errors->has())
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		@foreach($errors->all() as $err)
		{{ $err }}<br>
		@endforeach()
	</div>
@endif

@if ($success = Session::get('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $success }}
	</div>
@endif