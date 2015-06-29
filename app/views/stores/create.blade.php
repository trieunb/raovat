@extends('layouts.layout')

@section('content')
	<div class="content">
		<h3>Tạo gian hàng miễn phí trong 30s</h3>

		<form action="" method="POST" class="form-horizontal" role="form">
			@include('includes.notifications')
			<div class="form-group">
				<label for="inputStore_name" class="col-sm-2 control-label">Tên gian hàng:</label>
				<div class="col-sm-10">
					{{ Form::text('store_name', null, ['required'] ) }}
				</div>
			</div>
			<div class="form-group">
				<label for="inputStore_name" class="col-sm-2 control-label">Đường dẫn:</label>
				<div class="col-sm-10">
					{{ Form::text('store_slug', null, ['required']) }}
					<span style="font-style: italic;">http://cantho.info.vn/gian-hang/ten_gian_hang</span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary">Tạo ngay</button>
				</div>
			</div>
		</form>
								
	</div>
@stop