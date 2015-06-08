<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng nhập</title>

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

		    <div class="main">
		      <div class="login-header">
		        <hr class="hr-header">
		        <span class="span-header">Đăng Nhập</span>
		      </div>


		      {{ Form::open(array('url'=>'auth/dang-nhap', 'method'=>'POST')) }}
		      @include('includes.notifications')
		        <div class="form-group">
		        	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
					  {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Tên đăng nhập') ) }}
					</div>
		        </div>
		        <div class="form-group">
		         <div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-star"></i></span>
					  {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Nhập mật khẩu') ) }}
					</div>
		        </div>
		        
		        <div class="checkbox">
		          <label>
		           	{{ Form::checkbox('remember', 1,1) }} Ghi nhớ đăng nhập ?
		          </label>
		        </div>
		        <div class="btn-login">
		        	<input type="submit" class="btn btn btn-primary" value="Đăng nhập">
		        </div>
		      </form>
		      <div class="quenmatkhau">
		      	<span>(<a href="{{ URL::to('auth/quen-mat-khau') }}">Quên mật khẩu?</a> / <a href="{{ URL::to('auth/dang-ky') }}">Đăng Ký</a>)</h4></span>
		      </div>
		      <div class="login-or">
		        <hr class="hr-or">
		        <span class="span-or">Hoặc</span>
		      </div>

		      <div class="row facebook">
		        <div class="col-xs-12 col-sm-12 col-md-12">
		          <a href="{{ URL::to('auth/facebook') }}" class="btn btn-lg btn-primary btn-block">Facebook</a>
		        </div>
		        
		      </div>
		      <div class="row google">
		      	<div class="col-xs-12 col-sm-12 col-md-12">
		          <a href="{{ URL::to('auth/google-callback') }}" class="btn btn-lg btn-info btn-block">Google</a>
		        </div>
		      </div>
		    
		    </div>
		    
		  </div>
		</div>

		<!-- jQuery -->
		{{ HTML::script('assets/js/jquery-2.1.1.js') }}
		<!-- Bootstrap JavaScript -->
		{{ HTML::script('assets/js/bootstrap.min.js') }}
	</body>
</html>		