<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng ký thành viên</title>

		<!-- Bootstrap CSS -->
		{{ HTML::style('assets/css/bootstrap.min.css') }}
		<link href="{{ asset('assets/css/user.css') }}" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body>
		<div class="container">
		  <div class="row">

		    <div class="main-dangtin">
		      <div class="login-header">
		        <hr class="hr-header">
		        <span class="span-header">Đăng Tin</span>
		      </div>

		      {{ Form::open(array('url'=>'user/dangtin', 'method'=>'POST')) }}
		      @include('includes.notifications')

		      	<div class="form-group">
			        <label for="name" class="col-sm-2 control-label">Danh Mục</label>
			        <div class="col-sm-10 mag danhmuc">
			        	{{ Form::select('danhmuc',array('danh muc 1','danh muc 2','danh muc 3'),'',array('class'=>'form-control')) }}
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="name" class="col-sm-2 control-label">Loại Tin</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::radio('loaitin','',array('class'=>'form-control')) }}Cần Bán
			        	{{ Form::radio('loaitin','',array('class'=>'form-control')) }}Cần Mua
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="tieude" class="col-sm-2 control-label">Tiêu Đề</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::text('tieude','',array('class'=>'form-control')) }}
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="noidung" class="col-sm-2 control-label">Nội Dung</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::textarea('noidung','',array('class'=>'form-control')) }}
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="gia" class="col-sm-2 control-label">Giá</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::text('gia','',array('class'=>'form-control')) }}
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="image" class="col-sm-2 control-label">Hình</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::file('image','',array('class'=>'form-control')) }}
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="quytrinhvanchuyen" class="col-sm-2 control-label">Quy trình vận chuyển</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::textarea('quytrinhvanchuyen','',array('class'=>'form-control')) }}
			        </div>
			    </div>


			    <div class="form-group lienhe">
			    	<span><strong>Thông tin liên hệ</strong></span>
			    </div>

			    <div class="form-group">
			        <label for="ten" class="col-sm-2 control-label">Tên</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::text('first_name','',array('class'=>'form-control')) }}
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="email" class="col-sm-2 control-label">Email</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::email('email','',array('class'=>'form-control')) }}
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="phone" class="col-sm-2 control-label">Số điện thoại</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::text('phone','',array('class'=>'form-control')) }}
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="diachi" class="col-sm-2 control-label">Địa chỉ</label>
			        <div class="col-sm-10 mag">
			        	{{ Form::text('address','',array('class'=>'form-control')) }}
			        </div>
			    </div>

			    <div class="form-group">
		        <div class="btn-login">
		        	<input type="submit" class="btn btn btn-success" value="Đăng">
		        	
		        </div>
		        </div>
		      {{ Form::close() }}
		    </div>
		    
		  </div>
		</div>

		<!-- jQuery -->
		{{ HTML::script('assets/js/jquery-2.1.1.js') }}
		<!-- Bootstrap JavaScript -->
		{{ HTML::script('assets/js/bootstrap.min.js') }}
	</body>
</html>		