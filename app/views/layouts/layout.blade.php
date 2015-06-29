<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', isset($title) ?: 'Cantho.info.vn') | Cantho.info.vn</title>
    <!--[if lt IE 9]>
    {{ HTML::script('cti_design/assets/js/html5shiv.js') }}
    {{ HTML::script('cti_design/assets/js/respond.min.js') }}
    <![endif]-->

    {{--LOGO--}}
    <link rel="shortcut icon"
          href="http://shapebootstrap.net/demo/wordpress/flat_theme/wp-content/themes/flat-theme/favicon.png">
    {{-- <link rel="alternate" type="application/rss+xml" title="Flat Theme &raquo; Feed" href="http://shapebootstrap.net/demo/wordpress/flat_theme/?feed=rss2" /> --}}
    {{-- <link rel="alternate" type="application/rss+xml" title="Flat Theme &raquo; Comments Feed" href="http://shapebootstrap.net/demo/wordpress/flat_theme/?feed=comments-rss2" /> --}}

    {{-- CSS Style --}}
    {{ HTML::style('cti_design/assets/css/bootstrap.min.css') }}
    {{ HTML::style('cti_design/assets/css/prettyPhoto.css') }}
    {{ HTML::style('cti_design/assets/css/animate.css') }}
    {{ HTML::style('cti_design/assets/css/font-awesome.min.css') }}
    {{ HTML::style('cti_design/assets/css/style.css') }}

    {{-- CSS Style /End --}}

    {{-- Custom CSS --}}
    <style type='text/css'>
        @import url(http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);

        /* Body Style */
        body {
            background: #f5f5f5;
            color: #34495e;
            font-family: 'Roboto';
            size: 14px;
        }

        /* Heading Style */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto';
        }

        /*Link Color*/
        a {
            color: #428bca;
        }

        /*Link Hover Color*/
        a:hover {
            color: #d9534f;
        }

        /* Header Style */
        #header {
            background-color: #34495e;
        }
    </style> {{-- End Custom CSS--}}

    <meta name="generator" content="www.cantho.info.vn  v15.06.12"/>
</head>
<!--/head-->

<body class="blog">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1671697466387668";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@include('includes.navbar_top')
@yield('banner') {{-- Khi nao can banner thi @section('banner') tren @section('content') --}}

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="primary" class="content-area">
                    <div class="row">
                        @yield('content')  {{-- Khi them content, nho dua vao col-md9-, neu muon full thi de 12 --}}
                        @yield('menu_main') {{-- them col-md-3-, trong @section('content') nho them vao --}}
                    </div>
                </div>
            </div>
            <!--/.col-lg-12-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container.-->
</section>
<!--/#main-->

@include('includes.footer')
@include('includes.footer2')


@yield('script')
@yield('style')
{{-- Java Script --}}
{{ HTML::script('cti_design/assets/js/jquery.js') }}
{{ HTML::script('cti_design/assets/js/jquery-migrate.min.js') }}
{{ HTML::script('cti_design/assets/js/bootstrap.min.js') }}
{{ HTML::script('cti_design/assets/js/jquery.prettyPhoto.js') }}
{{ HTML::script('cti_design/assets/js/jquery.isotope.min.js') }}
{{ HTML::script('cti_design/assets/js/main.js') }}



{{-- End Java Script --}}
</body>
</html>