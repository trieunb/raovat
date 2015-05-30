@extends('backend.dashboard')
@section('content')
<?php if(Session::has('success')){ ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong>Success!</strong> {{Session::get('success')}}
    </div>
    <?php } ?>
<form action="{{ URL::action('AdminAuthController@postEditDanhMuc',$danhmuc->id) }}" method="post" class="form-horizontal" role="form">
	<!-- <div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" required>
		</div>
	</div> -->

	<div class="space-4"></div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Tên Danh Mục </label>

		<div class="col-sm-9">

			<input name="tendanhmuc" value="{{ $danhmuc->tendanhmuc }}" type="text" id="form-field-2" placeholder="Tên Danh Mục" class="col-xs-10 col-sm-5" required>
			
		</div>
	</div>

	<div class="space-4"></div>

	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Add
			</button>

			&nbsp; &nbsp; &nbsp;
			<button class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>
		</div>
	</div>

	<div class="hr hr-24"></div>

</form>
@stop