@extends('layouts.layout')

@section('content')
<div class="content">
	<h3>Đăng tin rao vặt</h3>
	<form action="{{ URL::to('rao-vat/dang-tin') }}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
	@include('includes.notifications')
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Tiêu Đề Tin:</label>
			<div class="col-sm-10">
				{{ Form::text('tieude', null, ['required']) }}
			</div>
		</div>
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Loại Tin:</label>
			<div class="col-sm-10">
				{{ Form::radio('loaitin', 1, ['required']) }}cần bán
				{{ Form::radio('loaitin', 0, ['required']) }}cần mua
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
				{{ Form::textarea('noidung', null, ['required', 'class'=>'form-control','id'=>'editor']) }}
			</div>
		</div>
		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Giá:</label>
			<div class="col-sm-4">
				{{ Form::text("gia",Input::old("gia"),array("placeholder"=>"Nhập giá ...",
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
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 2</strong></span>
				{{ Form::file('image2', null,['required']) }}
				</label>
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 3</strong></span>
				{{ Form::file('image3', null,['required']) }}
				</label>
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 4</strong></span>
				{{ Form::file('image4', null,['required']) }}
				</label>
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 5</strong></span>
				{{ Form::file('image5', null,['required']) }}
				</label>
			</div>
			
			<div class="col-sm-10 col-sm-offset-2 file-upload-btn field">
				<label class="file-upload">
				<span><strong>Image 6</strong></span>
				{{ Form::file('image6', null,['required']) }}
				</label>
			</div>
			</div>

		</div>

		<div class="form-group">
			<label for="input" class="col-sm-2 control-label">Quy Trình Vận Chuyển:</label>
			<div class="col-sm-10">
				{{ Form::textarea('quytrinhvanchuyen', null, ['required', 'class'=>'form-control']) }}
			</div>
		</div>
		<div class="form-group lienhe">
	    	<span><strong>Thông tin liên hệ</strong></span>
	    </div>

	    <div class="form-group">
	        <label for="ten" class="col-sm-2 control-label">Tên:</label>
	        <div class="col-sm-10 mag">
	        	{{ Form::text('name',$thongtinlienhe->full_name,array('class'=>'form-control')) }}
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="email" class="col-sm-2 control-label">Email:</label>
	        <div class="col-sm-10 mag">
	        	{{ Form::email('email',$thongtinlienhe->email,array('class'=>'form-control')) }}
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="phone" class="col-sm-2 control-label">Số điện thoại:</label>
	        <div class="col-sm-10 mag">
	        	{{ Form::text('phone',$thongtinlienhe->phone,array('class'=>'form-control')) }}
	        </div>
	    </div>
	    <div class="form-group">
	        <label for="phone" class="col-sm-2 control-label">Địa Chỉ:</label>
	        <div class="col-sm-10 mag">
	        	{{ Form::text('address',$thongtinlienhe->address,array('class'=>'form-control')) }}
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