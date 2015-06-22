@extends('layouts.storelayout')
@section('primary')
<section>
         <div class="center clear">
         
  <div class="kenshop-main"><nav class="woocommerce-breadcrumb"><a href="{{ $store->store_url() }}">Trang chủ</a> » Liên hệ</nav>
    
      <h2 class="title"><span>Liên hệ với chúng tôi</span></h2>
       <h3>Cảm ơn bạn đã gửi góp ý. Chúng tôi sẽ xem xét và phản hồi lại cho bạn.</h3>
      
<div class="clear"></div>  
  </div>
@include('includes.store_sidebar')
<div class="clear"></div>  
</div>

</section>
@stop