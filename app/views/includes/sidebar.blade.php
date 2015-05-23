<div class="panel panel-primary widget">
								<div class="panel-heading">
									<h3 class="panel-title">
										Tài khoản
									</h3>
								</div>
								<div class="panel-body">
									@if(Sentry::check())
									<span>
										Xin chào, <strong>Username</strong>
									</span>
									<ul>
										<li> {{ HTML::link('/thanh-vien/thong-tin-tai-khoan', 'Thông tin tài khoản') }}</li>
										<li> {{ HTML::link('/thanh-vien/nang-cap-tai-khoan', 'Nâng cấp tài khoản') }}</li>
										<li> {{ HTML::link('/thanh-vien/dang-xuat', '>Đăng xuât') }}</li>
									</ul>
										@else
									<ul>
										<li> {{ HTML::link('/thanh-vien/dang-ky', 'Đăng Ký') }}</li>
										<li> {{ HTML::link('/thanh-vien/dang-nhap', 'Đăng Nhập') }}</li>
										<li> {{ HTML::link('/thanh-vien/quen-mat-khau', 'Quên mật khẩu ?') }}</li>
										
									</ul>
										@endif

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