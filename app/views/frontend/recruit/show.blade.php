@extends('layouts.layout')
@section('title') Trang chủ @stop
@section('banner')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>
                        <div class="glyphicon glyphicon-file"></div> Thông tin tuyển dụng - Việc làm</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb  pull-right">
                        <li>
                            <a href="{{ URL::to('/') }}" class="breadcrumb_home">
                                <div class="glyphicon glyphicon-home"> Home</div>
                            </a>
                        </li>
                        <li>
                            <a href="/" class="breadcrumb_home">Tuyển dụng - việc làm</a>
                        </li>

                        <li class="active">
                            {{ $tuyendung->tencty }}
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
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-2">
                            @if($tuyendung->logo != null)
                                <img  src="{{ asset($tuyendung->logo) }}" class="img-thumbnail img-index">
                            @else
                                <img  src="{{ asset('/images/img.jpg') }}" class="img-thumbnail img-index">
                            @endif
                        </div>
                        <div class="col-md-10">
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <h3  class="media-heading">{{ $tuyendung->tencty }}</h3>
                                </h3>
                                <table>
                                    <tr>
                                        <td>Lĩnh vực: <b>{{ $tuyendung->linhvuc }}</b></td>
                                        <td>Hạn nộp hồ sơ: <b>{{ $tuyendung->hannophoso }}</b></td>
                                    </tr>
                                    <tr>
                                        <td>Mức lương: <b>{{ $tuyendung->mucluong }}</b></td>
                                        <td>Nơi làm việc: <b> {{ $tuyendung->noilamviec }}</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Vị trí: <b>{{ $tuyendung->vitrituyendung }}</b></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <table class="table ">
                        <tbody>
                        <tr>
                            <td>
                                <h4 class="center"><b>Nội dung chi tiết</b></h4>
                                {{ $tuyendung->noidungchitiet }}
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="fb-like" 
                    data-href="{{ URL::to('tuyen-dung/tin-tuyen-dung',$tuyendung->id) }}" 
                    data-layout="button_count" data-action="like" 
                    data-show-faces="true" data-share="false">
                </div>
                <div class="fb-share-button"
                    data-href="{{ URL::to('tuyen-dung/tin-tuyen-dung',$tuyendung->id) }}"
                    data-layout="button_count">
                </div>
                <div class="fb-comments"
                     data-href="{{ URL::to('tuyen-dung/tin-tuyen-dung',$tuyendung->id) }}"
                     data-width="100%" 
                     data-colorscheme="light"
                     data-numposts="1">
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