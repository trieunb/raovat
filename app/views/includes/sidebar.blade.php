
<div class="panel panel-primary widget">
	<div class="panel-body">
		<a href="{{ URL::to('gian-hang/tao-moi') }}" style="height: 50px; font-size: 25px;" class="btn btn-block btn-success">Tạo gian hàng</a>
	</div>
</div>
<div style="panel panel-primary widget padding:20px; margin-bottom:20px;">
    <form class="form-search form-inline">
    <?php $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>
        <div class="input-group">
            <input type="text" name="keyword" class="form-control search-query" placeholder="Search..." /> <span class="input-group-btn">
            <button type="submit" class="btn btn-primary"> Search</button>
            </span>

        </div>
    </form>
</div>
<div class="panel panel-primary widget">
								<div class="panel-heading">
									<h3 class="panel-title">
										Tài khoản
									</h3>
								</div>
								<div class="panel-body">
									@if(Sentry::check())
									<span>
										Xin chào, <strong>{{ $user->full_name }}</strong>
									</span>
									<ul>
										<li> {{ HTML::link('/thanh-vien/thong-tin-tai-khoan', 'Thông tin tài khoản') }}</li>
										<li> {{ HTML::link('/rao-vat/cac-tin-da-dang', 'Các tin đã đăng') }}</li>
										<li> {{ HTML::link('/thanh-vien/gian-hang', 'Gian hàng của bạn') }}</li>
										<li> {{ HTML::link('/thanh-vien/nang-cap-tai-khoan', 'Nâng cấp tài khoản') }}</li>
										<li> {{ HTML::link('/thanh-vien/dang-xuat', 'Đăng xuât') }}</li>
									</ul>
										@else
									<ul>
										<li> {{ HTML::link('auth/dang-ky', 'Đăng Ký') }}</li>
										<li> {{ HTML::link('auth/dang-nhap', 'Đăng Nhập') }}</li>
										<li> {{ HTML::link('auth/quen-mat-khau', 'Quên mật khẩu ?') }}</li>
										
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
										<li><a href="{{ URL::to('danh-muc') }}">Tất cả các danh mục</a></li>
										@foreach(Category::lists('tendanhmuc', 'id') as $key=>$cate)
						
										<li><a href="{{ URL::to('danh-muc/' . $key) }}">{{ $cate }}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
							<div class="panel panel-primary widget">
								<div class="panel-body">
									{{ HTML::image('assets/img/ads.jpg', null, array('class'=>'img-thumbnail im-responsive')) }}
								</div>
							</div>