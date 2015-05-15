@extends('layouts.layout')
@section('title','Danh Muc')
@section('content')
<div class="page-header">
<div class="advertisement">
	<span>
		<h3>Advertisement </h3>
		<h4>quảng cáo...</h4>
		</span>
</div>
	
	<div class="post-news pull-right">

		<span class="dangtin"><i class="fa fa-plus"></i><a href="">Đang Tin Ngay</a></span>
	</div>
</div>
<div class="container-fluid menu-h">
	<ul class="menu">
		<li>Trang Chủ &nbsp;&nbsp;/&nbsp;&nbsp;</li>
		<li>Chuyên Mục &nbsp;&nbsp;/&nbsp;&nbsp;</li>
		<li>Bài Viết Hiện Hành</li>
	</ul>
</div>
	<section id="content">

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="col-sm-9" id="primary">
					<div class="post">
						<div class="row">
							<div class="col-sm-4 post-img">
								<a href="">
								<img src="img/img.jpg" class="img-thumbnail index-thumbnail" alt="Alias ipsum quia ipsa aliquid labore nisi ut veniam occaecati aliquid."></a>
							</div>
							<div class="col-sm-8 post-content">
								<div class="post-title">
									<h3><a href="">Ten Bai Viet Thu 1</a></h3>
								</div>
								<div class="col-xs-12 post-meta">
									<div class="info">
										<span class="post-info">
											<span class="label label-hot"><a href="#">Hot</a></span>
											<span class="label label-new"><a href="#">New</a></span>
											<span class="label label-best"><a href="#">Best</a></span>
										</span>
										<i class="fa fa-user"></i>
										<span class="post-author">Đăng bởi
										<a href="">corene.rogahn</a>
										</span>
										<i class="fa fa-calendar"></i>
										<span class="post-date" title="">2 năm trước</span>
										<i class="fa fa-tags"></i>
										<span class="post-tags"> Tên chuyên mục
											
										</span>
									</div>
								</div>
								<div class="post-description">
									<p>Nemo atque commodi esse neque. Optio pariatur a ad. Ut qui molestias rem culpa. Eius non magni blanditiis aut suscipit voluptates et. </p>
									<span class="pull-right">
									<a href="#" class="read-more btn btn-price">1000tr VND</a>
									<a href="#" class="read-more btn btn-read-more">Xem chi tiết</a>
									</span>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- END POST -->
					<div class="post">
						<div class="row">
							<div class="col-sm-4 post-img">
								<a href="">
								<img src="img/img.jpg" class="img-thumbnail index-thumbnail" alt="Alias ipsum quia ipsa aliquid labore nisi ut veniam occaecati aliquid."></a>
							</div>
							<div class="col-sm-8 post-content">
								<div class="post-title">
									<h3><a href="">Ten Bai Viet Thu 2</a></h3>
								</div>
								<div class="col-xs-12 post-meta">
									<div class="info">
										<span class="post-info">
											<span class="label label-hot"><a href="#">Hot</a></span>
											<span class="label label-new"><a href="#">New</a></span>
											<span class="label label-best"><a href="#">Best</a></span>
										</span>
										<i class="fa fa-user"></i>
										<span class="post-author">Đăng bởi
										<a href="">corene.rogahn</a>
										</span>
										<i class="fa fa-calendar"></i>
										<span class="post-date" title="">2 năm trước</span>
										<i class="fa fa-tags"></i>
										<span class="post-tags"> Tên chuyên mục
											
										</span>
									</div>
								</div>
								<div class="post-description">
									<p>Nemo atque commodi esse neque. Optio pariatur a ad. Ut qui molestias rem culpa. Eius non magni blanditiis aut suscipit voluptates et. </p>
									<span class="pull-right">
									<a href="#" class="read-more btn btn-price">1000tr VND</a>
									<a href="#" class="read-more btn btn-read-more">Xem chi tiết</a>
									</span>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- END POST -->
					<div class="post">
						<div class="row">
							<div class="col-sm-4 post-img">
								<a href="">
								<img src="img/img.jpg" class="img-thumbnail index-thumbnail" alt="Alias ipsum quia ipsa aliquid labore nisi ut veniam occaecati aliquid."></a>
							</div>
							<div class="col-sm-8 post-content">
								<div class="post-title">
									<h3><a href="">Ten Bai Viet Thu 3</a></h3>
								</div>
								<div class="col-xs-12 post-meta">
									<div class="info">
										<span class="post-info">
											<span class="label label-hot"><a href="#">Hot</a></span>
											<span class="label label-new"><a href="#">New</a></span>
											<span class="label label-best"><a href="#">Best</a></span>
										</span>
										<i class="fa fa-user"></i>
										<span class="post-author">Đăng bởi
										<a href="">corene.rogahn</a>
										</span>
										<i class="fa fa-calendar"></i>
										<span class="post-date" title="">2 năm trước</span>
										<i class="fa fa-tags"></i>
										<span class="post-tags"> Tên chuyên mục
											
										</span>
									</div>
								</div>
								<div class="post-description">
									<p>Nemo atque commodi esse neque. Optio pariatur a ad. Ut qui molestias rem culpa. Eius non magni blanditiis aut suscipit voluptates et. </p>
									<span class="pull-right">
									<a href="#" class="read-more btn btn-price">1000tr VND</a>
									<a href="#" class="read-more btn btn-read-more">Xem chi tiết</a>
									</span>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- END POST -->
					<div class="clearfix"></div>
					</div>
					@include('includes.sidebar')
					<!-- END SIDEBAR -->
				</div>
			</div>
		</div>
	</secction>
	<footer>
		@include('includes.footer')
	</footer>
@stop