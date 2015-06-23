<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">
                {{-- LOGO --}} <img src="{{ URL::to('cti_design/assets/images/logo.png')}}" alt="CanTho Information"/>
            </a>
        </div>

        <div class="hidden-xs">
            <ul id="menu-main-menu" class="nav navbar-nav navbar-main">
                <li id="menu-item-310"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310 {{--active--}}"><a
                            title="Trang chủ" href="/"><div class="glyphicon glyphicon-home"></div> Home</a></li>
                <li id="menu-item-301"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-301 dropdown"><a
                            title="Pages" href="#">Pages <i class="icon-angle-down"></i></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-312"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a
                                    title="About Us" href="#">About Us</a></li>
                        <li id="menu-item-313"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                    title="Services" href="#">Services</a></li>
                        <li id="menu-item-315"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-315"><a
                                    title="Contact Us" href="#">Contact Us</a></li>
                        <li id="menu-item-317"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-317"><a
                                    title="FAQ" href="#">FAQ</a></li>
                        <li id="menu-item-316"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-316"><a
                                    title="Career" href="#">Career</a></li>
                        <li id="menu-item-318"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-318"><a
                                    title="Pricing" href="#">Pricing</a></li>
                        <li id="menu-item-302"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-302"><a title="404"
                                                                                                             href="#">404</a>
                        </li>
                        <li id="menu-item-319"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-319"><a
                                    title="Privacy policy" href="#">Privacy policy</a></li>
                        <li id="menu-item-320"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a
                                    title="Terms of Use" href="#">Terms of Use</a></li>
                    </ul>
                </li>
                <li id="menu-item-321"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-321 dropdown"><a
                            title="Rao vặt" href="/danh-muc">Rao vặt <i class="icon-angle-down"></i></a>
                    <ul role="menu" class=" dropdown-menu">
                        @foreach(Category::lists('tendanhmuc', 'id') as $key=>$cate)
                            <li id="menu-item-322"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-322"><a
                                        title="{{ $cate }}" href="{{ URL::to('danh-muc/' . $key) }}">{{ $cate }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                {{-- Tài khoản --}}
                @if(Sentry::check())
                    <li id="menu-item-301"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-301 dropdown"><a
                                title="Tài khoản" href="#"> <div class="glyphicon glyphicon-user"></div>  {{ $user->full_name }} <i
                                    class="icon-angle-down"></i></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li id="menu-item-312"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a
                                        title="Thông tin tài khoản" href="{{ URL::to('thanh-vien/thong-tin-tai-khoan') }}">Thông
                                    tin tài khoản</a></li>
                            <li id="menu-item-313"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                        title="Các tin đã đăng" href="{{ URL::to('rao-vat/cac-tin-da-dang') }}">Các tin đã
                                    đăng</a></li>
                            <li id="menu-item-313"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                        title="Nâng cấp VIP" href="{{ URL::to('hanh-vien/nang-cap-tai-khoan') }}">Nâng
                                    cấp tài khoản</a></li>
                            <li id="menu-item-313"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                        title="Đăng xuất" href="{{ URL::to('thanh-vien/dang-xuat') }}"><div class="glyphicon glyphicon-off"></div> Đăng xuất</a></li>

                        </ul>
                    </li>
                @else
                    <li id="menu-item-301"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-301 dropdown"><a
                                title="Tài khoản" href="#">Tài khoản <i class="icon-angle-down"></i></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li id="menu-item-312"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a
                                        title="Đăng nhập" href="{{ URL::to('auth/dang-nhap') }}">Đăng nhập</a></li>
                            <li id="menu-item-313"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                        title="Đăng ký" href="{{ URL::to('auth/dang-ky') }}">Đăng ký</a></li>
                            <li id="menu-item-313"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                        title="Tìm lại mật khẩu" href="{{ URL::to('auth/quen-mat-khau') }}">Quên mật
                                    khẩu</a></li>

                        </ul>
                    </li>
                @endif

                {{-- //Tài khoản --}}

                <!-- <li id=""
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330">
                    <a title="Đăng tin mới" href="{{ URL::to('rao-vat/dang-tin') }}">
                        <div class="glyphicon glyphicon-pencil"></div>  Đăng tin mới
                    </a>
                </li> -->

                <li id="menu-item-301"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-301 dropdown"><a
                            title="Tài khoản" href="#"><div class="glyphicon glyphicon-pencil"></div> Đăng tin mới <i class="icon-angle-down"></i></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-313"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                    title="Đăng ký" href="">Đăng tin tuyển dụng</a></li>
                        <li id="menu-item-312"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a
                                    title="Đăng nhập" href="{{ URL::to('rao-vat/dang-tin') }}">Đăng tin rao vặt</a></li>
                    </ul>
                </li>

            </ul>
        </div>

        {{-- Mini navbar --}}
        <div id="mobile-menu" class="visible-xs">
            <div class="collapse navbar-collapse">
                <ul id="menu-main-menu-1" class="nav navbar-nav">
                    {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310"><a title="Home"
                                                                                                          href="/">Home</a>
                    </li> --}}
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-301"><a title="Pages"
                                                                                                         href="#">Pages</a>
                <span class="menu-toggler" data-toggle="collapse" data-target=".collapse-301">
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </span>
                        <ul role="menu" class="collapse collapse-301 ">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a
                                        title="About Us" href="#">About Us</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                        title="Services" href="#">Services</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-315"><a
                                        title="Contact Us" href="#">Contact Us</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-317"><a
                                        title="FAQ" href="#">FAQ</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-316"><a
                                        title="Career" href="#">Career</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-318"><a
                                        title="Pricing" href="#">Pricing</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-302"><a
                                        title="404" href="#">404</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-319"><a
                                        title="Privacy policy" href="#">Privacy policy</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a
                                        title="Terms of Use" href="#">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-302"><a title="Rao vặt"
                                                                                                         href="{{ URL::to('danh-muc') }}">Rao
                            vặt</a>
                <span class="menu-toggler" data-toggle="collapse" data-target=".collapse-302">
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </span>
                        <ul role="menu" class="collapse collapse-302 ">
                            @foreach(Category::lists('tendanhmuc', 'id') as $key=>$cate)
                                <li id="menu-item-322"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-322"><a
                                            title="{{ $cate }}" href="{{ URL::to('danh-muc/' . $key) }}">{{ $cate }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    @if(Sentry::check())
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-303"><a
                                    title="Tài khoản"
                                    href="#"><div class="glyphicon glyphicon-user"></div> {{ $user->full_name }} </a>
                <span class="menu-toggler" data-toggle="collapse" data-target=".collapse-303">
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </span>
                            <ul role="menu" class="collapse collapse-303 ">
                                <li id="menu-item-312"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a
                                            title="Đăng nhập" href="{{ URL::to('thanh-vien/thong-tin-tai-khoan') }}">Thông
                                        tin tài khoản</a></li>
                                <li id="menu-item-313"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                            title="Đăng ký" href="{{ URL::to('rao-vat/cac-tin-da-dang') }}">Các tin đã
                                        đăng</a></li>
                                <li id="menu-item-313"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                            title="Tìm lại mật khẩu" href="{{ URL::to('hanh-vien/nang-cap-tai-khoan') }}">Nâng
                                        cấp tài khoản</a></li>
                                <li id="menu-item-313"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                            title="Tìm lại mật khẩu" href="{{ URL::to('thanh-vien/dang-xuat') }}"><div class="glyphicon glyphicon-off"></div> Đăng
                                        xuất</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-303"><a
                                    title="Đăng nhập | Đăng ký"
                                    href="#">Tài khoản </a>
                <span class="menu-toggler" data-toggle="collapse" data-target=".collapse-303">
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </span>
                            <ul role="menu" class="collapse collapse-303 ">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a
                                            title="About Us" href="{{ URL::to('auth/dang-nhap') }}">Đăng nhập</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                            title="Services" href="{{ URL::to('auth/dang-ky') }}">Đăng ký</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                            title="Services" href="{{ URL::to('auth/quen-mat-khau') }}">Tìm lại mật khẩu</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310">
                        <a title="Đăng tin mới" href="/rao-vat/dang-tin">
                            <div class="glyphicon glyphicon-pencil"></div> Đăng tin mới
                        </a>
                        <span class="menu-toggler" data-toggle="collapse" data-target=".collapse-304">
                        <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                        </span>
                        <ul role="menu" class="collapse collapse-303 ">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a
                                        title="About Us" href="">Đăng nhập</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                        title="Services" href="">Đăng ký</a></li>
                            
                        </ul>
                    </li> -->

                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-304"><a
                                title="Đăng tin mới"
                                href="#"><div class="glyphicon glyphicon-pencil"></div> Đăng tin mới </a>
                        <span class="menu-toggler" data-toggle="collapse" data-target=".collapse-304">
                        <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                        </span>
                        <ul role="menu" class="collapse collapse-304">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a
                                        title="About Us" href="">Đăng tin tuyển dụng</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313"><a
                                        title="Services" href="{{ URL::to('/rao-vat/dang-tin') }}">Đăng tin rao vặt</a></li>
                           
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.visible-xs-->
    </div>
</header><!--/#header-->