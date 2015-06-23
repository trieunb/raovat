@extends('layouts.layout')
@section('title') {{ ($cat_id>0)?Category::where('id', $cat_id)->first()->tendanhmuc:"Rao vặt - Tất cả" }} @stop
@section('banner')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><div class="glyphicon glyphicon-list-alt"></div>  {{ ($cat_id>0)?Category::where('id', $cat_id)->first()->tendanhmuc:"Rao vặt - Tất cả" }}</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb  pull-right">
                        <li>
                            <a href="/" class="breadcrumb_home"><div class="glyphicon glyphicon-home"> Home</div></a>
                        </li>
                        <li>
                            <a href="/danh-muc" class="breadcrumb_home">Rao vặt</a>
                        </li>
                        
                        <li class="active">
                            {{ ($cat_id>0)?Category::where('id', $cat_id)->first()->tendanhmuc:"Rao vặt - tất cả" }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@stop
@section('content')
    <div id="content" class="site-content col-md-9" role="main">
	<div class="content">
        {{-- TIN RAO VAT --}}
        <div class="entry-content">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                {{-- <div class="panel-heading">
                    <h1><a href="">{{ ($cat_id>0)?Category::where('id', $cat_id)->first()->tendanhmuc:"RAO VẶT - TẤT CẢ" }}</a></h1>
                </div> --}}

                <ul class="list-group">
                    <table class="table table-striped table-hover ">
                        <tbody>
                        @foreach($news as $key => $new)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td align="left">
                                    <div class="entry-title">
                                        <a href="{{ URL::action('NewsController@getXemTin',$new->id) }}"" rel="bookmark" title="Đăng bởi: {{ $new->name }}" rel="author">
                                        {{ $new->tieude }}

                                        {{-- Neu bai dang do co hinh thi xua ra icon --}}
                                        <?php if ($images[$key] != null) { ?>
                                        <div class="glyphicon glyphicon-picture"></div>
                                        <?php } else { ?>

                                        <?php } ?> {{-- //picture --}}
                                        </a>
                                    </div>
                                </td>

                                <td align="right">

                                    <div class="glyphicon glyphicon-eye-open" title="Lượt xem" rel="author"></div> {{ $new->luotxem }}
                                    <div class="glyphicon glyphicon-heart-empty" title="Yêu thích" rel="author"></div> ..
                                    {{-- <div class="glyphicon glyphicon-heart"></div> --}}
                                    <div class="glyphicon glyphicon-comment" title="Bình luận" rel="author"></div> ..

                                    <time class="entry-date" datetime="Ngày tháng năm">
                                        <div class="glyphicon glyphicon-time" title="Ngày đăng" rel="author"></div>
                                        {{-- {{ $new->created_at->diffForHumans() }} --}}
                                        {{ $new->ngaydang }}
                                    </time>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </ul>
            </div>
        </div>
        <div class="center">
            {{ $news->links() }}
        </div> {{-- //TIN RAO VAT --}}

	</div>
        </div>
@stop
@section('menu_main')
    <div id="content" class="site-content col-md-3" role="main">
        <div class="content">
            {{-- Tao gian hang moi --}}
            <div class="panel panel-primary widget">
                <div class="panel-body">
                    <a href="{{ URL::to('gian-hang/tao-moi') }}" style="height: 50px; font-size: 25px;"
                       class="btn btn-block btn-success">Tạo gian hàng</a>
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