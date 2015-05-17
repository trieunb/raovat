<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng ký thành viên</title>

		<!-- Bootstrap CSS -->
		{{ HTML::style('assets/css/bootstrap.min.css') }}
		<link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">

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

		    <div class="main">
		      <div class="login-header">
		        <hr class="hr-header">
		        <span class="span-header">Đăng Tin</span>
		      </div>



		      <div class="login-or">
		        <hr class="hr-or">
		        <span class="span-or">Hoặc</span>
		      </div>

		      {{ Form::open(array('url'=>'/register', 'method'=>'POST')) }}
		      @include('includes.notifications')
		      	<div class="form-group">
		      	<label class="control-label" for="danhmuc">Danh Mục:</label>
		      		<div class="input-group">
		      			
		      			{{ Form::select('danhmuc', array('danh muc 1','danh muc 2','danh muc 3'),'',array('class'=>'form-control')) }}
		      		</div>
		      	</div>

		      	<div class="form-group">
		      		<div class="input-group">
		      			<label for="loaitin">Loại Tin:</label>
		      			{{ Form::radio('loaitin', 'ban') }}cần bán
		      			{{ Form::radio('loaitin', 'mua') }}cần mua
		      		</div>
		      	</div>

		        <div class="btn-login">
		        	<input type="submit" class="btn btn btn-success" value="Đăng ký">
		        	<a href="{{ URL::route('users.login') }}" class="btn btn-primary">Đăng nhập</a>
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