<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title', isset($title) ?: 'Trang chủ') - Cần Thơ Info</title>

		<!-- Bootstrap CSS -->
		{{ HTML::style('assets/css/bootstrap.min.css') }}
		{{ HTML::style('assets/css/home.css') }}

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		@yield('style')
	</head>
	<body class="cantho">
	<div id="fb-root"></div>
	<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=1671697466387668";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="row clearfix header">
						<div class="col-sm-6 column">
							<div id="header">
								<h1><a href="#">CanTho.Info.Vn</a></h1>
								<span>Trang rao vặt lớn nhất Cần Thơ</span>
							</div>
						</div>
						<div class="col-sm-6 column">
							<div id="ads" class="pull-right">
								<a href="{{ URL::to('/') }}" target="_blank">{{ HTML::image('assets/img/468x80.gif', null, array('class'=>'img-responsive') ) }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<nav class="navbar navbar-default cantho-navbar" role="navigation">
				<div class="container">
					
					<div class="row">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 

						</div>
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">
								<li class="active"> {{ HTML::link('/', 'Trang chủ') }} </li>
								<li> <a href="{{ URL::to('rao-vat/dang-tin') }}">Đăng tin</a> </li>
								<li> {{ HTML::link('/', 'Liên hệ') }} </li>
							</ul>
						</div>
					</div>
						
				</div>
			</nav>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="row clearfix">
						<div class="col-md-9 column">
							@yield('content')
						</div>
						<div class="col-md-3 column">
							@include('includes.sidebar')
							
						</div>
						<div class="col-xs-12">
							@include('includes.advertiser')
						</div>
					</div>

				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
		<footer>
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="row clearfix">
							<div class="col-md-4 column">
								<h3>Contacts</h3>
								 <address> <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
							</div>
							<div class="col-md-4 column">
								<h3>Dịch vụ</h3>
								<ul>
									<li>
										<a href="#">Lorem ipsum dolor sit amet</a>
									</li>
									<li>
										<a href="#">Consectetur adipiscing elit</a>
									</li>
									<li>
										<a href="#">Integer molestie lorem at massa</a>
									</li>
									<li>
										<a href="#">Facilisis in pretium nisl aliquet</a>
									</li>
									<li>
										<a href="#">Nulla volutpat aliquam velit</a>
									</li>
									<li>
										<a href="#">Faucibus porta lacus fringilla vel</a>
									</li>
									<li>
										<a href="#">Aenean sit amet erat nunc</a>
									</li>
									<li>
										<a href="#">Eget porttitor lorem</a>
									</li>
								</ul>
							</div>
							<div class="col-md-4 column">
								<h3>Nhận bài mới qua email</h3>
								<form action="form-inline" method="POST" role="form">
									<div class="form-group">
										<div class="col-sm-12">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Nhập email của bạn">
											    	<span class="input-group-btn">
											    		<button class="btn btn-success" type="button">Go!</button>
											    	</span>
											</div>
										</div>
									</div>
									
								
									
								</form>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-xs-6">
								<span>
									Copyright &copy; 2015 CanThoIT
								</span>
							</div>
							<div class="col-xs-6">
								<span class="pull-right">
									All rights reserved
								</span>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer> <!-- #footer -->

		<!-- jQuery -->
		{{ HTML::script('assets/js/jquery-1.11.1.js') }}
		<!-- Bootstrap JavaScript -->
		{{ HTML::script('assets/js/bootstrap.min.js') }}
		@yield('script')
	</body>
</html>