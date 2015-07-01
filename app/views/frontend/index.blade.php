@extends('layouts.layout')
@section('title') Trang chủ @stop
@section('banner')
    <section id=services class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="media services">
                        <div class="pull-left">
                            <i style="background-color:#;" class="icon-ok icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Tuyển dụng & Việc làm</h3>
                            Website chuyên cung cấp miễn phí đăng tin tuyển dụng - việc làm - rao vặt hàng đầu Cần Thơ,
                            hãy liên hệ với chúng tôi để được đăng tin hoàn toàn miễn phí...<a href="#">(Xem thêm)</a>
                            <br>

                            <div class="glyphicon glyphicon-envelope"></div>
                            haotptcantho@gmail.com
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media services">
                        <div class="pull-left">
                            <i style="background-color:#;" class="icon-ok icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Đăng tin rao vặt</h3>
                            Bạn có sản phẩm hoặc dịch vụ cần cung cấp? <br>
                            Bạn đang là người cần sản phẩm hoặc dịch vụ ?
                            Website sẽ là cầu nối liên kết các bạn lại với nhau...<a href="#">(Xem thêm)</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media services">
                        <div class="pull-left">
                            <i style="background-color:#;" class="icon-ok icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Gian hàng Online</h3>
                            Bạn đang bán nhiều loại mặt hàng?
                            Bạn cần 1 website để dễ dàng quản lý và quảng cáo sản phẩm?
                            Hãy đăng ký gian hàng ngay bây giờ, bạn sẽ sở hữu 1 website của chính bạn..
                            <a href="#">(Xem thêm)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('content')
    <div id="content" class="site-content col-md-9" role="main">
        <div class="content">
            <div class="col-md-12">
                <h2 class="center">
                    <b>Thông tin tuyển dụng việc làm mới nhất</b>
                </h2>
                @foreach($tuyendung as $k => $v)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-2">
                                @if($v->logo != null)
                                    <a href="{{ URL::to('tuyen-dung/tin-tuyen-dung',$v->id) }}">
                                        <img src="{{ asset($v->logo) }}" class="img-thumbnail img-index">
                                    </a>
                                @else
                                    <a href="{{ URL::to('tuyen-dung/tin-tuyen-dung',$v->id) }}">
                                        <img src="{{ asset('/images/img.jpg') }}" class="img-thumbnail img-index">
                                    </a>
                                @endif
                            </div>
                            <div class="col-md-10">
                                <div class="media-body">
                                    <h3 class="media-heading"> <a
                                                href="{{ URL::to('tuyen-dung/tin-tuyen-dung',$v->id) }}"> {{ $v->tencty }}</a>
                                    </h3>
                                    <table>
                                        <tr>
                                            <td>Lĩnh vực: <b>{{ $v->linhvuc }}</b></td>
                                            <td>Hạn nộp hồ sơ: <b>{{ $v->hannophoso }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Mức lương: <b>{{ $v->mucluong }}</b></td>
                                            <td>Nơi làm việc: <b>{{ $v->noilamviec }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Vị trí: <b>{{ $v->vitrituyendung }}</b></td>
                                            <td><a href="{{ URL::to('tuyen-dung/tin-tuyen-dung',$v->id) }}">(Xem chi
                                                    tiết...)</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
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