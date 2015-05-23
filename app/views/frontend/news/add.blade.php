@extends('layouts.layout')

@section('content')
<div class="content">
	<h3>Đăng tin rao vặt</h3>
	<form action="{{ URL::to('rao-vat/dang-tin') }}" method="POST" class="form-horizontal" role="form">
	@include('includes.notifications')
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Tiêu Đề Tin:</label>
			<div class="col-sm-10">
				{{ Form::text('tieude', null, ['required']) }}
			</div>
		</div>
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Danh mục:</label>
			<div class="col-sm-10">
				{{ Form::select('cat_id', Category::lists('tendanhmuc', 'id') ) }}
			</div>
		</div>
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Nội dung:</label>
			<div class="col-sm-10">
				{{ Form::textarea('noidung', null, ['required', 'class'=>'textarea form-control']) }}
			</div>
		</div>
	
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-success">ĐĂNG NGAY</button>
				</div>
			</div>
	</form>
</div>
@stop

@section('style')
	{{ HTML::style('assets/css/prettify.css') }}
	{{ HTML::style('assets/css/bootstrap-wysihtml5.css') }}
@stop

@section('script')
	{{ HTML::script('assets/js/wysihtml5-0.3.0.js') }}
	{{ HTML::script('assets/js/prettify.js') }}
	{{ HTML::script('assets/js/bootstrap-wysihtml5.js') }}
	<script>
	$('.textarea').wysihtml5();
</script>
@stop