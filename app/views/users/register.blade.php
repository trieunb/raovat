<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
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
		        <span class="span-header">Đăng Ký</span>
		      </div>

		      <div class="row facebook">
		        <div class="col-xs-12 col-sm-12 col-md-12">
		          <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
		        </div>
		        
		      </div>
		      <div class="row google">
		      	<div class="col-xs-12 col-sm-12 col-md-12">
		          <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
		        </div>
		      </div>

		      <div class="login-or">
		        <hr class="hr-or">
		        <span class="span-or">Hoặc</span>
		      </div>

		      <form role="form">
		        <div class="form-group">
		          <div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
					  <input type="text" class="form-control" placeholder="Tên đăng nhập" aria-describedby="basic-addon1">
					</div>
		        </div>
		        <div class="form-group">
		         <div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-star"></i></span>
					  <input type="password" class="form-control" placeholder="Mật khẩu" aria-describedby="basic-addon1">
					</div>
		        </div>
		        <div class="form-group">
		         <div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-star"></i></span>
					  <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" aria-describedby="basic-addon1">
					</div>
		        </div>
		        <div class="form-group">
		        	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
					  <input type="text" class="form-control" placeholder="Họ & Tên" aria-describedby="basic-addon1">
					</div>
		        </div>
		        <div class="form-group">
		        	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
					  <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
					</div>
		        </div>
		        <div class="form-group">
		        	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
					  <input type="tel" class="form-control" placeholder="Số điện thoại" aria-describedby="basic-addon1">
					</div>
		        </div>
		        <div class="form-group">
		        	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-home"></i></span>
					  <input type="tel" class="form-control" placeholder="Địa chỉ liên hệ" aria-describedby="basic-addon1">
					</div>
		        </div>
		        
		        <div class="checkbox">
		          <label>
		            <input type="checkbox">
		            đồng ý điều khoản</label>
		        </div>
		        <div class="btn-login">
		        	<input type="submit" class="btn btn btn-primary" value="Đăng ký">
		        </div>
		      </form>
		    </div>
		    
		  </div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>		