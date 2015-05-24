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
		<style type="text/css">
		.facebook div a {
			background: #3B5998;
		}
		.google div a {
			background: #DC4A38;
		}
		.google div a:hover {
			background: #DA8378;
		}
		</style>
	</head>
	<body>
		<div class="container">
		  <div class="row">

		    <div class="main">
		      <div class="login-header">
		        <hr class="hr-header">
		        <span class="span-header">Đăng Ký</span>
		      </div>

		      <div class="row facebook">
		        <div class="col-xs-12 col-sm-12 col-md-12">
		          <a href="{{ URL::to('auth/facebook') }}" class="btn btn-lg btn-info btn-block"><i class="fa fa-facebook"></i> Facebook</a>
		        </div>
		        
		      </div>
		      <div class="row google">
		      	<div class="col-xs-12 col-sm-12 col-md-12">
		          <a href="{{ URL::to('auth/google-callback') }}" class="btn btn-lg btn-info btn-block">
		          	<i class="fa fa-google-plus"></i> Google
		          </a>
		        </div>
		      </div>

		      <div class="login-or">
		        <hr class="hr-or">
		        <span class="span-or">Hoặc</span>
		      </div>
				<?php $result = Session::get('result', array('id'=>'', 'username'=>'', 'email'=>'', 'name'=>'')); ?>
		      {{ Form::open(array('url'=>'auth/dang-ky', 'method'=>'POST')) }}
		      @include('includes.notifications')
		      	{{ Form::hidden('google_id', $result['id']) }}
		      	{{ Form::hidden('facebook_id', $result['id']) }}
		        <div class="form-group">
		          <div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
						{{ Form::text('username', $result['username'], array('class'=>'form-control', 'placeholder'=>'Tên đăng nhập', 'required') ) }}
					</div>
		        </div>
		        <div class="form-group">
		         <div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-star"></i></span>
					  {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Nhập mật khẩu', 'required') ) }}
					</div>
		        </div>
		        <div class="form-group">
		         <div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-star"></i></span>
					  {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Nhập lại mật khẩu', 'required') ) }}
					</div>
		        </div>
		        <div class="form-group">
		        	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
					  {{ Form::text('full_name',$result['name'], array('class'=>'form-control', 'placeholder'=>'Họ tên') ) }}
					</div>
		        </div>
		        <div class="form-group">
		        	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
					  {{ Form::email('email', $result['email'], array('class'=>'form-control', 'placeholder'=>'Nhập Email', 'required') ) }}
					</div>
		        </div>
		        <div class="form-group">
		        	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
					  {{ Form::text('phone', null, array('class'=>'form-control', 'placeholder'=>'Nhập số điện thoại') ) }}
					</div>
		        </div>
		        <div class="form-group">
		        	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-home"></i></span>
					  {{ Form::text('address', null, array('class'=>'form-control', 'placeholder'=>'Nhập địa chỉ') ) }}
					</div>
		        </div>
		        
		        <div class="checkbox">
		          <label>
		          	{{ Form::checkbox('agree', 1, 1) }} Đồng ý với điều khoản
		          </label>
		        </div>
		        <div class="btn-login">
		        	<input type="submit" class="btn btn btn-success" value="Đăng ký">
		        	<a href="{{ URL::to('auth/dang-nhap') }}" class="btn btn-primary">Đăng nhập</a>
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