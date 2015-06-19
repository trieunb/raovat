<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="" />
<title>Trang Chủ | {{ $store->tengianhang }}</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto|Source+Sans+Pro&subset=latin,vietnamese,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek' rel='stylesheet' type='text/css'>
{{ HTML::style('store/css/reset.css') }}
{{ HTML::style('store/css/dashicons.css') }}
{{ HTML::style('store/css/animate.css') }}
{{ HTML::style('store/css/font-awesome.css') }}
{{ HTML::style('store/css/editor-style.css') }}
{{ HTML::style('store/css/wp-default.css') }}
{{ HTML::style('store/css/vertical-menu.css') }}
{{ HTML::style('store/css/vertical-menu.css') }}
{{ HTML::style('store/style.css') }}
<!--{{ HTML::style('store/woocommerce/assets/css/woocommerce-smallscreen.css') }}-->
{{ HTML::style('store/woocommerce/assets/css/woocommerce-layout.css') }}

{{ HTML::style('store/woocommerce/assets/css/woocommerce.css') }}

@yield('style')
  <!--[if lt IE 9]>
    <script src="http://www.kenshoping.com/store/js/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]--> 
{{ HTML::script('store/js/jquery.min.js') }}
<script type="text/javascript">
$(document).ready(function(){
  
  $('ul.tabs-single li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs-single li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})
</script>
{{ HTML::script('store/js/jquery.hoverIntent.minified.js') }}

{{ HTML::script('store/js/jquery.cookie.js') }}
{{ HTML::script('store/js/jquery.dcjqaccordion.2.7.min.js') }}
<script type="text/javascript">
$(document).ready(function($){
          $('#accordion-photography').dcAccordion({
            eventType: 'click',
            autoClose: true,
            saveState: true,
            disableLink: true,
            speed: 'slow',
            showCount: false,
            autoExpand: true,
            cookie  : 'dcjq-accordion-photography',
            classExpand  : 'dcjq-current-parent'
          });
        
});
</script> 
{{ HTML::script('store/js/wow.min.js') }}
<script>
 new WOW().init();
</script>
{{ HTML::script('store/js/jquery.js') }}
{{ HTML::script('store/js/jquery.tinycarousel.min.js') }}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#product').tinycarousel({
                axis: 'x'
            });
        });
    </script>
    {{ HTML::script('store/js/classie.js') }}
    <script>
      function init() {
          window.addEventListener('scroll', function(e){
              var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                  shrinkOn = 300,
                  header = document.querySelector("header");
              if (distanceY > shrinkOn) {
                  classie.add(header,"smaller");
              } else {
                  if (classie.has(header,"smaller")) {
                      classie.remove(header,"smaller");
                  }
              }
          });
      }
      window.onload = init();
      </script>
    <!--Back To Top-->
    <script>
        jQuery(document).ready(function() {
            var offset = 220;
            var duration = 500;
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });
            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);
                return false;
            })
        });
    </script>
    <script>
    jQuery(document).ready(function() {
        jQuery(".screen .frame img").mouseover(function() {
        var $distance = this.height - jQuery(this).parent().height();
            jQuery(this).stop().animate({marginTop: -$distance}, 2000, 'linear');
        }).mouseout(function() {
            jQuery(this).stop().animate({marginTop: '0'}, 300);
        });
    });
</script>
<script>
  $(document).ready(function(){
  $('.cart-widget').hide();
  $('a.view-cart').click(function(e){
      e.stopPropagation();
      $('.cart-widget').slideToggle();
  });
  $('.cart-widget').click(function(e){
      e.stopPropagation();
  });

  $(document).click(function(){
       $('.cart-widget').slideUp();
  });
});
</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
						/* show the bar and hide othere navigation elements */
			@media only screen and (max-width: 1200px) {
				html { padding-top: 42px!important; }
				#wprmenu_bar { display: block!important; }
				div#wpadminbar { position: fixed; }
							}
        .product-thumbnail {
          display: block !important;
        }
        h1.site-title {
          font-size: 30px;
  text-transform: uppercase;
  padding: 20px 0;
        }
		</style>
		<meta name="author" content="CanThoIT - DTT"></head>
<body class="<?php if(Request::segment(3)=='') echo 'home blog';
elseif(Request::segment(3)=='san-pham' || Request::segment(3)=='danh-muc' || Request::segment(3)=='tim-kiem' || Request::segment(3)=='lien-he') echo 'single single-product woocommerce woocommerce-page';
elseif(Request::segment(3)=='gio-hang') echo 'page page-template-default woocommerce-cart woocommerce-page';
 ?>">
<header>
         <div class="menu-top">
            <div class="center">
                
<div class='search-box'>
    <form method="get" id="searchform" action="{{ $store->store_url('tim-kiem') }}"> 
        <input class="text-search" type="text" value="Tìm kiếm" 
            name="s" id="s"  onblur="if (this.value == '')  {this.value = 'Tìm kiếm';}"  
            onfocus="if (this.value == 'Tìm kiếm') {this.value = '';}" />
        <input name="search" type="submit" id='buttom-search' class='buttom-search' value="" /> 
    </form>
</div>               <ul><li id="menu-item-174" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-174"><a href="index.html">Home</a></li>
<li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175"><a href="{{ $store->store_url('gioi-thieu') }}">Giới Thiệu</a></li>
<li id="menu-item-176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176"><a href="{{ $store->store_url('thanh-toan') }}">Thanh Toán</a></li>
<li id="menu-item-176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176"><a href="{{ $store->store_url('lien-he') }}">Liên Hệ</a></li>
</ul>            </div>
         </div>
         <div class="center clear">
            <h1 class="logo">
                  
              <a href="{{ $store->store_url() }}" title="{{ $store->tengianhang }}">
                   
                  
                  @if($store->key('logo'))
                    {{ $store->image($store->key('logo'), ['width'=>280, 'height'=>'auto']) }}
                  @else 
                    <h1 class="site-title">{{ $store->tengianhang }}</h1>
                  @endif
                   
              </a>
            </h1>
         </div>
         <div class="menu-bottom clear">
            <div class="center">
               <ul class="nav-bottom"><li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-63"><a href="{{ $store->store_url() }}">Home</a></li>
<li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-70"><a href="{{ $store->store_url('san-pham') }}">Danh mục</a>
<ul class="sub-menu">
  @foreach($cats as $cat)
	<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="{{ $store->store_url('danh-muc/'.$cat->id) }}">{{ $cat->name }}</a></li>
  @endforeach
</ul>
</li>
<li id="menu-item-95" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a href="{{ $store->store_url('lien-he') }}">Liên hệ</a></li>
<li id="menu-item-96" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a href="{{ $store->store_url('thanh-toan') }}">Thanh Toán</a></li>
</ul>               
<div class="cart-info">
                <a href="{{ $store->store_url('gio-hang') }}" style="color: #FFF"><i class="fa fa-shopping-cart"></i></a>
                <a title="View your shopping cart" class="view-cart">
                
                <p>{{ Cart::count() }} items - <span class="amount">{{ number_format(Cart::total(), 0, ',', '.') }}&nbsp;VNĐ</span></p>                            
                </a>
                <div class="cart-widget">
                <div class="woocommerce"><div class="widget_shopping_cart_content">
                  <ul class="cart_list product_list_widget ">
                  @foreach(Cart::content() as $p)
                    <li>
                      <a href="{{ $store->store_url('san-pham/'.$p->id) }}">
                      <img width="720" height="960" src="{{ $store->image_url($product_image[$p->id]) }}" class="attachment-shop_thumbnail wp-post-image" alt="sexy">{{ $p->name }}</a>
                              
                    <span class="quantity">{{ $p->qty }} × <span class="amount">{{ number_format($p->price, 0, ',', '.') }}&nbsp;VNĐ</span></span>
                    </li>
                    @endforeach
                  </ul>

                </div></div> 
                </div>  
              </div>
            </div>
         </div>
      </header>

      @yield('primary')

      <footer>
         <div class="center">
            <div class="footer-info">
               <div class="footer-col">
                  <div class="footer-item">
                     <h2 class="title"> <i class="fa fa-home"></i> VĂN PHÒNG</h2>
                     <i class="fa fa-taxi"></i> Địa chỉ: <br/> {{ $store->key('diachi') }} <br/>
                     <i class="fa fa-wifi"></i> Điện thoại:<br/> {{ $store->key('dienthoai') }} <br/>
                     
                     
                  </div>
                  <div class="footer-item">
                     <h2 class="title"><i class="fa fa-tags"></i> GIỚI THIỆU</h2>
                      <i class="fa fa-envelope-o"></i> Email: <br/> {{ $store->key('email') }}<br/>
                     <i class="fa fa-desktop"></i> Website:  <br><a href="{{ $store->store_url() }}" title="{{ $store->title }}" target="_blank">{{ $store->store_url() }}</a> <br/>
                                                      </div>
               </div>
               <div class="footer-col">
                  <div class="footer-item">
                     <h2 class="title"><i class="fa fa-th-large"></i> LIÊN KẾT VỚI CHÚNG TÔI</h2>
                        <ul class="followUs">
                        @if($store->key('facebook'))
                        <li><a href="{{ $store->key('facebook') }}">{{ HTML::image('store/images/socials/facebook.png') }}</a></li>
                        @endif
                        @if($store->key('twitter'))
                        <li><a href="{{ $store->key('twitter') }}">{{ HTML::image('store/images/socials/twitter.png') }}</a></li>
                        @endif
                        @if($store->key('youtube'))
                        <li><a href="{{ $store->key('youtube') }}">{{ HTML::image('store/images/socials/youtube.png') }}</a></li>
                        @endif
                     </ul>
                                                      </div>
                  <div class="footer-item">
                     <div class="face-footer"><h2 class="title"><i class="fa fa-chevron-circle-right"></i> Kết nối với chúng tôi</h2></div>                  </div>
               </div>
               <div class="clear"></div>
            </div>
            <div class="copyright">
               <div class="center">
                  Bản quyền thuộc về CanThoIT<br>
                  </div>
            </div>
         </div>
      </footer>


    {{ HTML::script('store/sliderengine/amazingslider.js') }}
    {{ HTML::script('store/sliderengine/initslider.js') }}
    @section('script')
</body>
</html>