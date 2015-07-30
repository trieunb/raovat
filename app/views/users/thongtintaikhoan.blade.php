@extends('layouts.layout')
@section('title','Thông Tin Tài Khoản')
@stop

@section('banner')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>
                        <div class="glyphicon glyphicon-file"></div> {{ $user->full_name }}</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb  pull-right">
                        <li>
                            <a href="{{ URL::to('/') }}" class="breadcrumb_home">
                                <div class="glyphicon glyphicon-home"> Home</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('thanh-vien/thong-tin-tai-khoan') }}" class="breadcrumb_home">Thông Tin Tài Khoản</a>
                        </li>
                        <li class="active">
                            {{ $user->full_name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@stop

@section('content')
<div class="col-md-9">

    <div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="text-center" style="color:rgb(52, 73, 94);">Thông tin tài khoản</h2>
        </div>
        <div class="panel-body text-center">

	<div class="info">
		<table class="table table-bordered">
			<tr>
				<td class="col-xs-5">Username</td>
				<td class="col-xs-7">{{ $user->username  }}</td>
			</tr>
			<tr>
				<td class="col-xs-5">Email</td>
				<td class="col-xs-7">{{ $user->email }}</td>
			</tr>
			<tr>
				<td class="col-xs-5">Họ Tên</td>
				<td class="col-xs-7">{{ $user->full_name }}</td>
			</tr>
			<tr>
				<td class="col-xs-5">Số Điện Thoại</td>
				<td class="col-xs-7">{{ $user->phone }}</td>
			</tr>
			<tr>
				<td class="col-xs-5">Địa Chỉ</td>
				<td class="col-xs-7">{{ $user->address }}</td>
			</tr>
		</table>
        </div>
        <a href="" class="btn btn-info">Chỉnh sửa thông tin tài khoản</a>
    </div>
    </div>
			
	</div>
    <div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="text-center" style="color:rgb(52, 73, 94);">Các tin rao vặt</h2>
        </div>
        <div class="panel-body text-center">

		<table class="table table-bordered">
			<thead>
				<th>Tiên Đề</th>
				<th>Nội Dung</th>
				<th>Giá</th>
				<th>Loại Tin</th>
				<th>Quy Trình Vận Chuyển</th>
				<th>Lượt Xem</th>
				<th>Hình Ảnh</th>
				<th colspan="2" class="text-center">action</th>
			</thead>
			<tbody>
				@foreach($news as $k => $v)
				<tr>
					<td><a href="{{ URL::action('NewsController@getXemTin',$v->id) }}">{{ $v->tieude }}</a></td>
					<td>{{ $v->noidung }}</td>
					<td>{{ $v->gia }}</td>
					<td><?php if($v->loaitin == 0) echo "cần mua"; else echo "cần bán"; ?></td>
					<td>{{ $v->quytrinhvanchuyen }}</td>
					<td>{{ $v->luotxem }}</td>
					<td>
						 @if(!empty($images[$k]))
						<img src="{{ asset($images[$k][0]) }}" class="img-thumbnail img-info">
						@else
						<img src="{{ asset('images/dangtin/img.jpg') }}" class="img-thumbnail img-info">
						@endif
					</td>
					<td style="vertical-align: middle;">
                   
						<a class="btn btn-warning" href="{{ URL::action('UserController@getEditDangTin',$v->id) }}">
							<!-- <span class="fa fa-edit pull-right bigicon"></span> -->
                            Edit
						</a>
                    
                    </td>
                    <td style="vertical-align: middle;">
                   
			    		<a class="delete btn btn-danger" onclick="return confirm('Are you sure you want to Remove?');"  data-confirm="Are you sure to delete this item?" href="{{ URL::action('UserController@getDeleteDangTin',$v->id) }}">	
							<!-- <img class="img-del" src="http://www.prepbootstrap.com/Content/images/template/BootstrapEditableGrid/delete.png"> -->
			    		   Delete
                        </a>
                   
			    	</td>
				</tr>
				@endforeach
			</tbody>
		</table>

    </div>
    </div>
</div>
 <div class="col-sm-12">
<div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="text-center" style="color:rgb(52, 73, 94);">Các tin tuyển dụng</h2>
        </div>
        <div class="panel-body text-center">

        <table class="table table-bordered">
            <thead>
                <th>Tên Cty</th>
                <th>Địa chỉ</th>
                <th>Lĩnh vực</th>
                <th>Mức lương</th>
                <th>Vị trí</th>
                <th>Hạn nộp hồ sơ</th>
                <th>Nơi làm việc</th>
                <th>Trạng thái</th>
                <th colspan="2" class="text-center">action</th>
            </thead>
            <tbody>
                @foreach($tuyendung as $k => $v)
                <tr>
                    <td>
                        @if($v->trangthai==0)
                            {{ $v->tencty }}
                        @else
                        <a href="{{ URL::action('NewsController@getTinTuyenDung',$v->id) }}">
                            {{ $v->tencty }}
                        </a>
                        @endif
                    </td>
                    <td>{{ $v->diachi }}</td>
                    <td>{{ $v->linhvuc }}</td>
                    <td>{{ $v->mucluong }}</td>
                    <td>{{ $v->vitri }}</td>
                    <td>
                        {{ $v->hannophoso }}
                    </td>
                    <td>
                        {{ $v->noilamviec }}
                    </td>
                    <td style="vertical-align: middle;">
                        @if($v->trangthai == 0)
                            <span class="label label-warning">Not Active</span>
                        @else
                            <span class="label label-primary">Active</span>
                        @endif
                    </td>
                    <td style="vertical-align: middle;">
                   
                        <a class="btn btn-warning" href="{{ URL::action('UserController@getEditTuyenDung',$v->id) }}">
                            <!-- <span class="fa fa-edit pull-right bigicon"></span> -->
                            Edit
                        </a>
                    
                    </td>
                    <td style="vertical-align: middle;">
                   
                        <a class="delete btn btn-danger" onclick="return confirm('Are you sure you want to Remove?');"  href="{{ URL::action('UserController@getDeleteTuyenDung',$v->id) }}">    
                            <!-- <img class="img-del" src="http://www.prepbootstrap.com/Content/images/template/BootstrapEditableGrid/delete.png"> -->
                           Delete
                        </a>
                   
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

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
