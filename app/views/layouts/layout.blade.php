<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title', isset($title) ?: 'Trang chủ') - Cần Thơ Info</title>

		<!-- Bootstrap CSS -->
		{{ HTML::style('assets/css/bootstrap.min.css') }}

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="row clearfix">
						<div class="col-md-6 column">
						</div>
						<div class="col-md-6 column">
						</div>
					</div>
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Brand</a>
						</div>
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="#">Link</a>
								</li>
								<li>
									<a href="#">Link</a>
								</li>
								<li class="dropdown">
									 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">Separated link</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">One more separated link</a>
										</li>
									</ul>
								</li>
							</ul>
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" />
								</div> <button type="submit" class="btn btn-default">Submit</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#">Link</a>
								</li>
								<li class="dropdown">
									 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						
					</nav>
					<div class="jumbotron">
						<h1>
							Welcome to Cần Thơ Info
						</h1>
						<p>
							Chào mừng bạn đến với hệ thống website rao vặt lớn nhất Cần Thơ
						</p>
						<p>
							<a class="btn btn-primary btn-large" href="#">Đăng Ký Ngay</a>
						</p>
					</div>
					<div class="row clearfix">
						<div class="col-md-9 column">
							<h2>
								Tin tức 01
							</h2>
							<p>
								Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
							</p>
							<p>
								<a class="btn" href="#">View details »</a>
							</p>
							<h2>
								Tin tức 02
							</h2>
							<p>
								Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
							</p>
							<p>
								<a class="btn" href="#">View details »</a>
							</p>
							
							<h2>
								Tin tức 03
							</h2>
							<p>
								Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
							</p>
							<p>
								<a class="btn" href="#">View details »</a>
							</p>
							<div class="row">
								<div class="col-md-4">
									<div class="thumbnail">
										<img alt="300x200" src="http://lorempixel.com/600/200/people" />
										<div class="caption">
											<h3>
												Tin tức HOT
											</h3>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
											<p>
												<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<img alt="300x200" src="http://lorempixel.com/600/200/city" />
										<div class="caption">
											<h3>
												Tin tức HOT
											</h3>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
											<p>
												<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<img alt="300x200" src="http://lorempixel.com/600/200/sports" />
										<div class="caption">
											<h3>
												Tin tức HOT
											</h3>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
											<p>
												<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="thumbnail">
										<img alt="300x200" src="http://lorempixel.com/600/200/people" />
										<div class="caption">
											<h3>
												Tin tức HOT
											</h3>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
											<p>
												<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<img alt="300x200" src="http://lorempixel.com/600/200/city" />
										<div class="caption">
											<h3>
												Tin tức HOT
											</h3>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
											<p>
												<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<img alt="300x200" src="http://lorempixel.com/600/200/sports" />
										<div class="caption">
											<h3>
												Tin tức HOT
											</h3>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
											<p>
												<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 column">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">
										Tài khoản
									</h3>
								</div>
								<div class="panel-body">
									Panel content
								</div>
								<div class="panel-footer">
									Panel footer
								</div>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">
										Danh mục
									</h3>
								</div>
								<div class="panel-body">
									Panel content
								</div>
								<div class="panel-footer">
									Panel footer
								</div>
							</div><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-thumbnail" /><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-thumbnail" />
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-12 column">
							<div class="row clearfix">
								<div class="col-md-4 column">
									 <address> <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
								</div>
								<div class="col-md-4 column">
									<ul>
										<li>
											Lorem ipsum dolor sit amet
										</li>
										<li>
											Consectetur adipiscing elit
										</li>
										<li>
											Integer molestie lorem at massa
										</li>
										<li>
											Facilisis in pretium nisl aliquet
										</li>
										<li>
											Nulla volutpat aliquam velit
										</li>
										<li>
											Faucibus porta lacus fringilla vel
										</li>
										<li>
											Aenean sit amet erat nunc
										</li>
										<li>
											Eget porttitor lorem
										</li>
									</ul>
								</div>
								<div class="col-md-4 column">
									<ol>
										<li>
											Lorem ipsum dolor sit amet
										</li>
										<li>
											Consectetur adipiscing elit
										</li>
										<li>
											Integer molestie lorem at massa
										</li>
										<li>
											Facilisis in pretium nisl aliquet
										</li>
										<li>
											Nulla volutpat aliquam velit
										</li>
										<li>
											Faucibus porta lacus fringilla vel
										</li>
										<li>
											Aenean sit amet erat nunc
										</li>
										<li>
											Eget porttitor lorem
										</li>
									</ol>
								</div>
							</div>
							<h3>
								h3. Lorem ipsum dolor sit amet.
							</h3>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		{{ HTML::script('assets/js/jquery-1.11.1.js') }}
		<!-- Bootstrap JavaScript -->
		{{ HTML::script('assets/js/bootstrap.min.js') }}
	</body>
</html>