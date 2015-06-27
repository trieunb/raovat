@extends('layouts.layout')
@section('title') {{ $news->tieude }} @stop
@section('banner')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>
                        <div class="glyphicon glyphicon-file"></div> {{ $news->tieude }}</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb  pull-right">
                        <li>
                            <a href="{{ URL::to('/') }}" class="breadcrumb_home">
                                <div class="glyphicon glyphicon-home"> Home</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('danh-muc') }}" class="breadcrumb_home">Rao vặt</a>
                        </li>
                        <li>
                            <a href="/danh-muc/{{ $cat->id }}" class="breadcrumb_home">{{ $cat->tendanhmuc }}</a>
                        </li>

                        <li class="active">
                            {{ $news->tieude }}
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
            <div class="entry-content">
                        <div class="panel panel-default">
                            <div class="clearfix"></div>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td align="right">
                                        <b>Chuyên mục:</b>
                                    </td>
                                    <td>
                                        {{ $cat->tendanhmuc }}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                       <b>Loại tin:</b>
                                    </td>
                                    <td>
                                        <?php if ($news->loaitin = 1) { ?>
                                        Cần bán
                                        <?php } else { ?>
                                        Cần mua
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td  align="right">
                                        <b>Nội dung:</b>
                                    </td>
                                    <td>
                                        {{ nl2br($news->noidung) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                      <b>Nội dung:</b>
                                    </td>
                                    <td>
                                        {{$news->gia}} VNĐ
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        <b>Quy trình vận chuyển, giao & nhận:</b>
                                    </td>
                                    <td>
                                        {{ $news->quytrinhvanchuyen }}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        {{-- show anh --}}
                                        <section id="page">
                                            <div class="container">
                                                <div id="content" class="site-content" role="main">
                                                    <article id="post-121" class="post-121 page type-page status-publish hentry">
                                                        <div class="entry-content">
                                                            <div id="portfolio" class="clearfix">
                                                                <p></p>
                                                                {{-- tags-tin --}}
                                                                <ul class="portfolio-filter">
                                                                    <li><a class="btn btn-default active" href="#"
                                                                           data-filter=".tin-1-active"><b><i>Hình ảnh bài viết</i></b></a></li>
                                                                    <li><a class="btn btn-default" href="#" data-filter=".tin-2">Tin liên quan</a>
                                                                    </li>
                                                                    <li><a class="btn btn-default" href="#" data-filter=".tin-3">Tin HOT nhất</a>
                                                                    </li>
                                                                    <li><a class="btn btn-default" href="#" data-filter=".tin4">Gian hàng HOT nhất</a>
                                                                    </li>
                                                                </ul> {{-- //tags-tin --}}
                                                                {{-- show hinh theo nhom: portfolio-item tin-1-active --}}
                                                                <ul class="portfolio-items col-3">
                                                                    <?php foreach ($images as $key => $value) { ?>
                                                                    <li class="portfolio-item tin-1-active">
                                                                        <div class="item-inner">
                                                                            <img width="260" height="260" src="{{ asset($value) }}"
                                                                                 class="img-responsive wp-post-image"
                                                                                 alt="Fornax - Apps site template"
                                                                                 title="Fornax - Apps site template"/>
                                                                            <a href="{{ asset($value) }}"><h5>Hình Ảnh {{1+$key}}</h5></a>

                                                                            <div class="overlay">
                                                                                <a class="preview btn btn-danger" href="{{ asset($value) }}"
                                                                                   rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <?php } ?>
                                                                </ul> {{-- //show hinh theo nhom --}}
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div> <!--/#content-->
                                            </div>
                                        </section>
                                        {{-- //show anh --}}
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            XEM THÔNG TIN LIÊN HỆ
                                        </button>
                                        <div class="collapse" id="collapseExample">
                                            <div class="well">
                                                <table>
                                                    <tr>
                                                        <td align="right">Tên: </td>
                                                        <td><b>{{ $news->name }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Email: </td>
                                                        <td><b>{{ $news->email }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Điện thoại: </td>
                                                        <td><b>{{ $news->phone }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Địa chỉ: </td>
                                                        <td><b>{{ $news->address }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Ngày đăng: </td>
                                                        <td><b>{{ $news->ngaydang }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Lượt xem: </td>
                                                        <td><b>{{ $news->luotxem }}</b></td>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>




            </div> {{-- //entry-content --}}
        </div> {{-- //content --}}
    </div> {{-- //col-md-9 --}}
@stop

@section('style')
    {{ HTML::style('assets/css/Carousel.css') }}
    <style type="text/css">
        h3.post-title {
            background-color: #B1D3CF;
            padding: 10px;
            color: #C20000;
        }

        .fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
            min-width: 100% !important;
            width: 100% !important;
        }

        p.img-post span {
            color: rgb(95, 176, 228);
            font-size: 15px;
        }


    </style>

@stop
@section('script')
    {{ HTML::script('assets/js/carousel.js') }}
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