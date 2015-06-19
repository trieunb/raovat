
@extends('layouts.layout')
@section('title','Đăng tin')
@section('content')
<div class="content">
	<h3 class="text-center">Sửa Tin Đăng</h3>
	<?php if(Session::has('success')){ ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong>Success!</strong> {{Session::get('success')}}
    </div>
    <?php } ?>
	<form action="{{ URL::action('UserController@postEditDangTin',$news->id) }}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
	<!-- @include('includes.notifications') -->
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Tiêu Đề Tin:</label>
			<div class="col-sm-10">
				{{ Form::text('tieude', $news->tieude, ['required']) }}
				@if ($errors->has('tieude')) <p class="help-block" style="color:red">{{ $errors->first('tieude') }}</p> @endif
			</div>
		</div>
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Loại Tin:</label>
			<div class="col-sm-10">
				<input <?php if($news->loaitin == 1) echo "checked"; ?>  name="loaitin" type="radio" value="1">cần bán
				<input <?php if($news->loaitin == 0) echo "checked"; ?>  name="loaitin" type="radio" value="0">cần mua
			</div>
		</div>
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Danh mục:</label>
			<div class="col-sm-10">
				<select class="form-control" name="cat_id">
					<option></option>
					@foreach($category as $k => $v)
						<option value="{{ $v->id }}" <?php if($v->id == $news->cat_id) echo "selected"; ?> >{{ $v->tendanhmuc }}</option>
					@endforeach
				</select>
				@if ($errors->has('cat_id')) <p class="help-block" style="color:red">{{ $errors->first('cat_id') }}</p> @endif
			</div>
		</div>
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Nội dung:</label>
			<div class="col-sm-10">
				{{ Form::textarea('noidung', $news->noidung, ['required', 'class'=>'form-control','id'=>'editor']) }}
				@if ($errors->has('noidung')) <p class="help-block" style="color:red">{{ $errors->first('noidung') }}</p> @endif
			</div>
		</div>
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Giá:</label>
			<div class="col-sm-4">
				{{ Form::text("gia",$news->gia,array("placeholder"=>"Nhập giá ...",
                                                               "autocomplete"=>"off",
                                                                "onkeyup"=>"AutoFormatDigit(this)"
                                                                )) }}
			</div>VNĐ
		</div>
		<div class="form-group">

			<label for="input" class="col-sm-2 control-label">Hình Ảnh:</label>
			<div class="image-group">
			<div class="col-sm-10 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 1</strong></span>
				{{ Form::file('image1', null,['required']) }}
				</label>
				@if ($errors->has('image1')) <p class="help-block" style="color:red">{{ $errors->first('image1') }}</p> @endif
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 2</strong></span>
				{{ Form::file('image2', null,['required']) }}
				</label>
				@if ($errors->has('image2')) <p class="help-block" style="color:red">{{ $errors->first('image2') }}</p> @endif
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 3</strong></span>
				{{ Form::file('image3', null,['required']) }}
				</label>
				@if ($errors->has('image3')) <p class="help-block" style="color:red">{{ $errors->first('image3') }}</p> @endif
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 4</strong></span>
				{{ Form::file('image4', null,['required']) }}
				</label>
				@if ($errors->has('image4')) <p class="help-block" style="color:red">{{ $errors->first('image4') }}</p> @endif
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 5</strong></span>
				{{ Form::file('image5', null,['required']) }}
				</label>
				@if ($errors->has('image5')) <p class="help-block" style="color:red">{{ $errors->first('image5') }}</p> @endif
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 6</strong></span>
				{{ Form::file('image6', null,['required']) }}
				</label>
				@if ($errors->has('image6')) <p class="help-block" style="color:red">{{ $errors->first('image6') }}</p> @endif
			</div>
			</div>

		</div>

		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Quy Trình Vận Chuyển:</label>
			<div class="col-sm-10">
				{{ Form::textarea('quytrinhvanchuyen', $news->quytrinhvanchuyen, ['required', 'class'=>'form-control']) }}
			</div>
		</div>
		<div class="form-group lienhe">
	    	<span><strong>Thông tin liên hệ</strong></span>
	    </div>

	    <div class="form-group">
	        <label for="ten" class="col-sm-2 control-label">Tên:</label>
	        <div class="col-sm-10 mag">
	        	{{ Form::text('name',$news->name,array('class'=>'form-control')) }}
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="email" class="col-sm-2 control-label">Email:</label>
	        <div class="col-sm-10 mag">
	        	{{ Form::email('email',$news->email,array('class'=>'form-control')) }}
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="phone" class="col-sm-2 control-label">Số điện thoại:</label>
	        <div class="col-sm-10 mag">
	        	{{ Form::text('phone',$news->phone,array('class'=>'form-control')) }}
	        </div>
	    </div>
	    <div class="form-group">
	        <label for="phone" class="col-sm-2 control-label">Địa Chỉ:</label>
	        <div class="col-sm-10 mag">
	        	{{ Form::text('address',$news->address,array('class'=>'form-control')) }}
	        </div>
	    </div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" class="btn btn-success">Cập Nhập</button>
			</div>
		</div>
	</form>
</div>
@stop

@section('style')
	{{ HTML::style('assets/css/prettify.css') }}
	{{ HTML::style('assets/css/bootstrap-wysihtml5.css') }}
	{{ HTML::style('assets/css/froala_style.min.css') }}
	{{ HTML::style('assets/css/froala_editor.min.css') }}
	{{ HTML::style('assets/css/file-upload.css') }}
	<style type="text/css">
	.form-group.lienhe {
	  text-align: center;
	  font-size: 25px !important;
	  color: rgb(95, 176, 228);
	}
</style>
@stop

@section('script')
	{{ HTML::script('assets/js/wysihtml5-0.3.0.js') }}
	{{ HTML::script('assets/js/prettify.js') }}
	{{ HTML::script('assets/js/bootstrap-wysihtml5.js') }}
	
	{{ HTML::script('assets/js/upload-file-jelly-min.js') }}
	<script>
		$('.textarea').wysihtml5();
	</script>
	{{ HTML::script('assets/js/froala_editor.min.js') }}
	{{ HTML::script('assets/js/froala_editor_ie8.min.j') }}
<script language="javascript">
        function AutoFormatDigit(obj) {
            var value = $(obj).val().replace(/,/g, '');
            $(obj).val(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        }
</script>
<script>
      $(function() {
          $('#editor').editable({inlineMode: false})
      });
  </script>
  {{ HTML::script('assets/js/file-upload.js') }}
     <!-- Include Font Awesome. -->

@stop