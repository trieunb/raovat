<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store Admin Manager</title>

    {{ HTML::style('assets/css/bootstrap.min.css') }}
    <style type="text/css">
    body {
      background: #D7D7D7;
      margin-top: 50px;
    }
    #primary {
      background: #FFF;
    }
    .table-product img {
      max-width: 50px;
    }
    tr.background {
      background: #8AD3C0;
    }
    </style>
    @yield('style')
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('gian-hang/'.$store->store_slug.'/admin') }}">{{ $store->tengianhang }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="{{ $store->store_url('admin') }}">Quản lý sản phẩm</a></li>
            <li class=""><a href="{{ $store->store_url('admin/category') }}">Quản lý danh mục</a></li>
            <li><a href="{{ $store->store_url('admin/orders') }}">Quản lý đơn hàng</a></li>
            <li><a href="{{ $store->store_url('admin/settings') }}">Cài đặt gian hàng</a></li>
            <li><a href="{{ $store->store_url() }}">Trang chủ gian hàng</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="{{ URL::to('thanh-vien/dang-xuat') }}">Đăng xuất</a>
          </li>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    @yield('primary')

   {{ HTML::script('assets/js/jquery-1.11.1.js') }}
    <!-- Bootstrap JavaScript -->
    {{ HTML::script('assets/js/bootstrap.min.js') }}

    @yield('script')
  </body>
</html>