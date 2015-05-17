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

	</head>
	<body class="cantho">
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
								<a href="http://google.com" target="_blank">{{ HTML::image('assets/img/468x80.gif', null, array('class'=>'img-responsive') ) }}</a>
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
								<li class="active"> <a href="#">Trang chủ</a> </li>
								<li> <a href="{{ URL::to('user/dangtin') }}">Đăng tin</a> </li>
								<li> <a href="#">Liên hệ</a> </li>
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
							<div class="content">
								<h3>Việc làm mới đăng</h3>
								<div class="row">
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a><br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a><br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a><br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a><br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a><br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a><br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a><br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a><br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#" class="paid-job">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a>
											<span class="flash-hot"></span>
											<br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
									<div class="col-xs-4 margin-top-5">
										<div class="index-job">
											<a href="#">Tuyển nhân viên lập trình web PHP cần kinh nghiệm và kĩ thuật cao</a><br>
											<span class="index-company">Công ty TNHH Digitalship Japan</span>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<h2>Nhà tài trợ</h2>
								<div class="col-md-4">
									<div class="thumbnail">
										{{ HTML::image('assets/img/post.jpg') }}
										<div class="caption">
											<h4>
												<a href="#">Công ty TNHH Company</a>
											</h4>
											<p>
												Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
											</p>
											<p>
												<a href="#" class="btn btn-info btn-cantho">Xem</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										{{ HTML::image('assets/img/post.jpg') }}
										<div class="caption">
											<h4>
												<a href="#">Công ty TNHH Company</a>
											</h4>
											<p>
												Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
											</p>
											<p>
												<a href="#" class="btn btn-info btn-cantho">Xem</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										{{ HTML::image('assets/img/post.jpg') }}
										<div class="caption">
											<h4>
												<a href="#">Công ty TNHH Company</a>
											</h4>
											<p>
												Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
											</p>
											<p>
												<a href="#" class="btn btn-info btn-cantho">Xem</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="thumbnail">
										{{ HTML::image('assets/img/post.jpg') }}
										<div class="caption">
											<h4>
												<a href="#">Công ty TNHH Company</a>
											</h4>
											<p>
												Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
											</p>
											<p>
												<a href="#" class="btn btn-info btn-cantho">Xem</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										{{ HTML::image('assets/img/post.jpg') }}
										<div class="caption">
											<h4>
												<a href="#">Công ty TNHH Company</a>
											</h4>
											<p>
												Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
											</p>
											<p>
												<a href="#" class="btn btn-info btn-cantho">Xem</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										{{ HTML::image('assets/img/post.jpg') }}
										<div class="caption">
											<h4>
												<a href="#">Công ty TNHH Company</a>
											</h4>
											<p>
												Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
											</p>
											<p>
												<a href="#" class="btn btn-info btn-cantho">Xem</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 column">
							<div class="panel panel-primary widget">
								<div class="panel-heading">
									<h3 class="panel-title">
										Tài khoản
									</h3>
								</div>
								<div class="panel-body">
									<span>
										Xin chào, <strong>Username</strong>
									</span>
									<ul>
										<li><a href="#">Thông tin tài khoản</a></li>
										<li><a href="#">Nâng cấp tài khoản</a></li>
										<li><a href="">Đăng xuât</a></li>
									</ul>
								</div>
								
							</div>
							<div class="panel panel-primary widget">
								<div class="panel-heading">
									<h3 class="panel-title">
										Danh mục
									</h3>
								</div>
								<div class="panel-body">
									<ul>
										<li><a href="#">Bán hàng</a></li>
										<li><a href="#">IT/Phần mềm</a></li>
										<li><a href="#">IT/Phần cứng</a></li>
										<li><a href="#">Dịch vụ</a></li>
									</ul>
								</div>
							</div>
							<div class="panel panel-primary widget">
								<div class="panel-body">
									{{ HTML::image('assets/img/ads.jpg', null, array('class'=>'img-thumbnail im-responsive')) }}
								</div>
							</div>
							
						</div>
						<div class="col-xs-12">
							<div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>          
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div> 
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>         
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>          
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>  
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>          
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>      
              <div class="col-md-3">
                <a class="thumbnail" href="#">{{ HTML::image('assets/img/post.jpg') }}</a>
              </div>  
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div> 
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
									Copyright &copy; 2015 Company
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
	</body>
</html>