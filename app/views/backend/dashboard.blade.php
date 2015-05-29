<?php $ver = '1.0' ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title></title>
	<!-- BOOTSTRAP STYLES-->
	{{ HTML::style('assets/css/bootstrap.min.css') }}
	<!-- FONTAWESOME ICONS STYLES-->
	{{ HTML::style('assets/font-awesome/4.2.0/css/font-awesome.min.css') }}
	<!--CUSTOM STYLES-->
	{{ HTML::style('//fonts.googleapis.com/css?family=Open+Sans:400,300') }}
	{{ HTML::style('assets/css/ace.min.css') }}
	{{ HTML::script('assets/js/ace-extra.min.js') }}
	<!--[if lte IE 9]>
		{{ HTML::style('assets/css/ace-part2.min.css') }}
		<![endif]-->

		<!--[if lte IE 9]>
		{{ HTML::style('assets/css/ace-ie.min.css') }}
		<![endif]-->

	@yield('style')
</head>
<body class="no-skin">
	@include('includes.admin.navbar')
		<div class="main-container" id="main-container">
			
			@include('includes.admin.sidebar')

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						
					</div>

					<div class="page-content">

						<div class="page-header">
							<h1>
								@yield('page-header')
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								@yield('content')
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Rao Vặt Cần Thơ</span>
							- Nguyễn Bá Triều &copy; 2015
						</span>

						<!-- <span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span> -->
					</div>
				</div>
			</div>
		</div><!-- /.main-container -->

	<!-- JQUERY SCRIPTS -->
	{{ HTML::script('assets/js/jquery-1.11.1.js?v='.$ver) }}
	{{ HTML::script('assets/js/bootstrap.js?v='.$ver) }}

	@yield('script')
	<!-- ace scripts -->
	{{ HTML::script('assets/js/ace-elements.min.js?v='.$ver) }}
	{{ HTML::script('assets/js/ace.min.js?v='.$ver) }}
	@yield('custom-script')
	
</body>
</html>
