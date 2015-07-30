@extends('layouts.layout')
@section('title','Nạp Thẻ Cào')
@stop
@section('content')
<div class="col-md-9">
    <div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="text-center" style="color:rgb(52, 73, 94);">NẠP TIỀN VÀO TÀI KHOẢN</h2>
        </div>
        <div class="panel-body text-center">

        	<form name="napthe" action="{{ '/thanh-vien/nang-cap-tai-khoan' }}" method="post" class="form-horizontal">
					<div class="list-ncc" style="padding:5px 0;">
						<ul class="row">
							<li class="col-md-4">
								<label>
									<img src="{{ asset('cti_design/assets/images/lgmobifone.png') }}" alt="Mobifone" title="Mạng Mobifone">
									<div class="radio">
										<input type="radio" name="cardtype" class="cart" id="bkcardmobi1" value="MOBI" checked="checked"><i></i>
									</div>
								</label>
							</li>
							<li class="col-md-4">
								<label>
									<img src="{{ asset('cti_design/assets/images/lgviettel.png') }}" alt="Viettel" title="Mạng Viettel">
									<div class="radio">
										<input type="radio" name="cardtype" class="cart" id="bkcardviettel1" value="VIETEL"><i></i>
									</div>
								</label>
							</li>
							<li class="col-md-4">
								<label>
									<img src="{{ asset('cti_design/assets/images/lgvinaphone.png') }}" alt="Vinaphone" title="Mạng Vinaphone">
									<div class="radio">
										<input type="radio" name="cardtype" class="cart" id="bkcardvina1" value="VINA"><i></i>
									</div>												
								</label>
							</li>
						</ul>
					</div>
					<?php if(Session::has('success')){ ?>
					    <div class="alert alert-success alert-dismissible" role="alert">
					      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					      {{Session::get('success')}}
					    </div>
					<?php } ?>
                    <?php if(Session::has('error')){ ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                          {{Session::get('error')}}
                        </div>
                    <?php } ?>
					<div class="form-napthe col-md-8 col-md-offset-2">
						<p class="description"><i>Bạn vui lòng nhập <u>mã thẻ cào</u> dưới lớp tráng bạc trên thẻ.</i></p>
						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Mã Thẻ Cào</label>
							<div class="col-sm-8">
								{{ Form::text('pwd',null,['required','placeholder'=>"Nhập mã thẻ cào"]) }}
							</div>	
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Số Seri</label>
							<div class="col-sm-8">
								{{ Form::text('seri',null,['placeholder'=>"Nhập số seri"]) }}
							</div>	
						</div>

						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Mã xác nhận</label>
							<div class="col-sm-4">
								{{ Form::text('captcha',null,['placeholder'=>"Nhập capcha"]) }}
							</div>	
							<div class="col-sm-4">
<<<<<<< HEAD
								<img src="" alt="Captcha" title="Captcha">
=======
								<img src="{{ asset('cookies/'.Session::get("cookie").'.png') }}" alt="">
>>>>>>> abe3023d1ed6b10a2aae6fa36389d22010d731f2
							</div>
						</div>

						<div class="form-group center">
                            <button type="submit" class="btn btn-primary">Nạp Tiền</button>
                        </div>
					</div>
				</form>

        </div>
    </div>
	</div>
</div>
@stop

@section('menu_main')
    <div id="content" class="site-content col-md-3" role="main">
        <div class="content">
            {{-- Tao gian hang moi --}}
            <div class="panel panel-primary widget">
                <div class="panel-body">
                    @if($store == null)
                    <a href="{{ URL::to('gian-hang/tao-moi') }}" style="height: 50px; font-size: 25px;"
                       class="btn btn-block btn-success">Tạo gian hàng</a>
                    @else
                    <a href="/thanh-vien/gian-hang" style="height: 50px; font-size: 25px;"
                           class="btn btn-block btn-success">Gian hàng của bạn</a>
                    @endif
                </div>
            </div> {{-- ##Tao gian hang moi --}}

            {{-- Search --}}
            <div style="panel panel-primary widget padding:20px; margin-bottom:20px;">
                <form class="form-search form-inline">
                    <?php $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control search-query" placeholder="Tìm kiếm ..."/> <span
                                class="input-group-btn">
            <button class="btn btn-danger" type="submit"><i class="icon-search"></i></button>
            </span>

                    </div>
                </form>
            </div> {{-- ##search --}}

            {{-- Tài khoản --}}
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

            </div> {{-- ##Tài koản --}}

            {{-- Chuyên mục --}}
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
            </div>  {{-- ##Chuyên mục --}}

            {{--
            <div class="panel panel-primary widget">
                <div class="panel-body">
                    {{ HTML::image('assets/img/ads.jpg', null, array('class'=>'img-thumbnail im-responsive')) }}
                </div>
            </div>
            --}}
            <div>
                <h3>Tags cloud</h3>

                <div class="tagcloud"><a href='#' class='tag-link-9' title='1 topic'
                                         style='font-size: 8pt;'>Bootstrap</a>
                    <a href='#' class='tag-link-10' title='2 topics' style='font-size: 16.4pt;'>CSS</a>
                    <a href='#' class='tag-link-11' title='1 topic'
                       style='font-size: 8pt;'>CSS3</a>
                    <a href='#' class='tag-link-12' title='2 topics' style='font-size: 16.4pt;'>HTML5</a>
                    <a href='#' class='tag-link-13' title='2 topics' style='font-size: 16.4pt;'>Joomla</a>
                    <a href='#' class='tag-link-8' title='3 topics' style='font-size: 22pt;'>Wordpress</a>
                </div>
            </div>

        </div>
    </div>
@stop
@section('style')
	 {{ HTML::style('cti_design/assets/css/napthe.css') }}

@stop
