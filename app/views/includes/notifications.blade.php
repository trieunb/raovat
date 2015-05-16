@if ($errors->has())
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $errors->first() }}
	</div>
@endif

@if ($success = Session::get('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $success }}
	</div>
@endif