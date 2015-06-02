@extends('layouts.storelayout')
@section('primary')
      <section>
         <div class="center clear">
         

  <div class="content-sub">

        
            <h2 class="title"><span>Cart</span></h2>

            <div class="woocommerce">
<form action="{{ $store->store_url('gio-hang/update') }}" method="post">

@include('includes.store_notifications')
<table class="shop_table cart" cellspacing="0">
  <thead>
    <tr>
      <th class="product-remove">&nbsp;</th>
      <th class="product-thumbnail">&nbsp;</th>
      <th class="product-name">Sản phẩm</th>
      <th class="product-price">Giá</th>
      <th class="product-quantity">Số lượng</th>
      <th class="product-subtotal">Tổng</th>
    </tr>
  </thead>
  <tbody>
        @if(count(Cart::content()))
          @foreach(Cart::content() as $p)
            <tr class="cart_item">

          <td class="product-remove">
            <a href="{{ $store->store_url('xoa-san-pham/'.$p->rowid) }}" class="remove" title="Xóa sản phẩm này">×</a>         </td>
          <td class="product-thumbnail">
            <a href="http://www.kenshoping.com/shop/dien-thoai/zenfone-4">
            <img width="300" height="225" src="{{ $store->image_url($products[$p->id]) }}" class="attachment-shop_thumbnail wp-post-image" alt="{{ $p->name }}"></a>
          </td>

          <td class="product-name">
            <a href="{{ $store->store_url('san-pham/'.$p->id) }}">{{ $p->name }} </a>          </td>

          <td class="product-price">
            <span class="amount">{{ $store->price($p->price) }}&nbsp;VNĐ</span>          </td>

          <td class="product-quantity">
            <div class="quantity">
            <input type="number" step="1" min="0" name="qty[{{ $p->rowid }}]" value="{{ $p->qty }}" title="SL" class="input-text qty text" size="4"></div>
             </td>

          <td class="product-subtotal">
            <span class="amount">{{ $store->price($p->price*$p->qty) }}&nbsp;VNĐ</span>          </td>
        </tr>
        @endforeach
      @else
         <tr class="cart_item">
            <td colspan="6">Bạn chưa thêm sản phẩm nào vào giỏ hàng.</td>
         </tr>
      @endif
            <tr>
        <td colspan="6" class="actions">

          
          <input type="submit" class="button" name="update_cart" value="Cập nhật Giỏ hàng">

          
           </td>
    </tr>

      </tbody>
</table>


</form>

<div class="cart-collaterals">

  <div class="cart_totals ">

  
  <h2>Tổng số trong giỏ</h2>

  <table cellspacing="0">

    <tbody><tr class="cart-subtotal">
      <th>Tổng phụ</th>
      <td><span class="amount">{{ $store->price(Cart::total()) }}&nbsp;VNĐ</span></td>
    </tr>

    
    
      
      <tr class="shipping">
  <th class="padding">Vận chuyển</th>
  <td>
    
      Miễn phí vận chuyển<input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping" class="shipping_method">

      
    
    
          



      </td>
</tr>

      
    
    
                            
    
    <tr class="order-total">
      <th>Tổng</th>
      <td><strong><span class="amount">{{ $store->price(Cart::total()) }}&nbsp;VNĐ</span></strong> </td>
    </tr>

    
  </tbody></table>

  
  <div class="wc-proceed-to-checkout">

        <a href="{{ $store->store_url('thanh-toan') }}" class="checkout-button button alt wc-forward">Thanh toán</a>
    
  </div>

  
</div>

</div>

</div>

  </div>          


<div class="clear"></div>  
</div>
      </section>
@stop
@section('style')
  <style type="text/css">
      .alert-success {
        background: #2ecc71;
    padding: 20px;
    margin: 10px 0;
    color: #FFF;
      }
      .alert-danger {
        background: #CC6A2E;
        padding: 20px;
    margin: 10px 0;
    color: #FFF;
      }
      th.padding {
          padding: 0 30px !important;
      }

  </style>

@stop