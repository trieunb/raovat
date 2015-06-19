@extends('layouts.storelayout')
@section('primary')
<section>
         <div class="center clear">
         
  <div class="kenshop-main"><nav class="woocommerce-breadcrumb"><a href="{{ $store->store_url() }}">Trang chủ</a> » Kết quả tìm kiếm</nav>
    
      <h2 class="title"><span>Kết quả tìm kiếm cho từ: {{ $keyword }}</span></h2>

    
    
    
      <p class="woocommerce-result-count">
  Hiển thị {{ $products->getFrom() }} đến {{ $products->getTo() }} trong tổng số {{ $products->getTotal() }} kết quả</p>
<div class="clear"></div>  
      <div class="list-product clear">
<ul>
        
        @if(count($products) > 0)
        @foreach($products as $p)
          <li class="box wow flipInX animated" style="visibility: visible;">

  
  <a href="{{ $store->store_url('san-pham/'.$p->id) }}" class="img-product">
    <div class="screen">
            <div class="frame">
    <img width="300" height="223" src="{{ $store->image_url($p->image) }}" class="attachment-shop_catalog wp-post-image" alt="clip_5" style="margin-top: 0px;">      </div>
    </div>
  </a>
  <a class="post-title" href="{{ $store->store_url('san-pham/'.$p->id) }}">{{ $p->title }}</a>
    
  <div class="product-rating">
    <div class="star-rating" title="4.00 / 5 điểm"><span style="width:80%"><strong class="rating">4.00</strong> trên 5</span></div> </div>

  <p class="price"><span class="amount">{{ $store->price($p->price) }}&nbsp;VNĐ</span></p>

  

  <a href="{{ $store->store_url('add-cart/'.$p->id) }}" rel="nofollow" data-product_id="12" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Thêm vào giỏ hàng</a>
</li>
      @endforeach
    @endif
        
      </ul>
</div>
<div class="clear"></div>  
{{ $products->links() }}

</div>
@include('includes.store_sidebar')
<div class="clear"></div>  
</div>
</section>
@stop