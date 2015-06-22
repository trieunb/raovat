@extends('layouts.storelayout')
@section('primary')
<section>
         <div class="center clear">
         

  <div class="content-sub">

        
            <h2 class="title"><span>Checkout</span></h2>

            <div class="woocommerce">
  

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="" enctype="multipart/form-data">

  @include('includes.store_notifications')
    
    <div class="col2-set" id="customer_details">
      <div class="col-1">
        <div class="woocommerce-billing-fields">
  
    <h3>Thông tin thanh toán</h3>

  
  
  
    <p class="form-row form-row-first validate-required" id="billing_first_name_field">
    <label for="billing_first_name" class="">Họ <abbr class="required" title="bắt buộc">*</abbr></label>

    {{ Form::text('billing_first', null, ['class'=>'input-text']) }}
  
    <p class="form-row form-row-last validate-required" id="billing_last_name_field">
    <label for="billing_last_name" class="">Tên <abbr class="required" title="bắt buộc">*</abbr></label>
     {{ Form::text('billing_last', null, ['class'=>'input-text']) }}
    <p class="form-row form-row-wide" id="billing_company_field">
    <label for="billing_company" class="">Tên doanh nghiệp</label>
    {{ Form::text('billing_company', null, ['class'=>'input-text']) }}
    <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field">
    <label for="billing_address_1" class="">Địa chỉ <abbr class="required" title="bắt buộc">*</abbr></label>
    {{ Form::text('billing_address', null, ['class'=>'input-text']) }}
    <p class="form-row form-row-first validate-required validate-email" id="billing_email_field">
    <label for="billing_email" class="">Địa chỉ email <abbr class="required" title="bắt buộc">*</abbr></label>
    {{ Form::text('billing_email', null, ['class'=>'input-text']) }}
    <p class="form-row form-row-last validate-required validate-phone" id="billing_phone_field">
    <label for="billing_phone" class="">Số điện thoại <abbr class="required" title="bắt buộc">*</abbr></label>
    {{ Form::text('billing_phone', null, ['class'=>'input-text']) }}
  
  
    
    
    
     

    
    
  </div>      </div>

      <div class="col-2">
        <div class="woocommerce-shipping-fields">
  
    
    <h3 id="ship-to-different-address">
      <label for="ship-to-different-address-checkbox" id="label-different-address" class="checkbox">Giao hàng tới địa chỉ khác?</label>
      
      {{ Form::checkbox('different_address', 1, null, ['class'=>'input-checkbox', 'id'=>'ship-to-different-address-checkbox']) }}
    </h3>

    <div class="shipping_address" style="display: block;">

      
      
        <p class="form-row form-row-first validate-required" id="shipping_first_name_field">
        <label for="shipping_first_name" class="">Họ <abbr class="required" title="bắt buộc">*</abbr></label>
        {{ Form::text('shipping_first', null, ['class'=>'input-text']) }}
        <p class="form-row form-row-last validate-required" id="shipping_last_name_field"><label for="shipping_last_name" class="">Tên <abbr class="required" title="bắt buộc">*</abbr></label>
        {{ Form::text('shipping_last', null, ['class'=>'input-text']) }}
        <p class="form-row form-row-wide" id="shipping_company_field"><label for="shipping_company" class="">Tên doanh nghiệp</label>
          {{ Form::text('shipping_company', null, ['class'=>'input-text']) }}
        <p class="form-row form-row-wide address-field validate-required" id="shipping_address_1_field"><label for="shipping_address_1" class="">Địa chỉ <abbr class="required" title="bắt buộc">*</abbr></label>
        {{ Form::text('shipping_address', null, ['class'=>'input-text']) }}
      
    </div>

  
  
  
    
    
      <p class="form-row notes" id="order_comments_field">
      <label for="order_comments" class="">Ghi chú</label>
      {{ Form::textarea('order_comment', null, ['class'=>'input-text']) }}
  
  </div>
      </div>
    </div>

    
    <h3 id="order_review_heading">Đơn hàng của bạn</h3>

  
  
  <div id="order_review" class="woocommerce-checkout-review-order">
    <table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name">Sản phẩm</th>
      <th class="product-total">Tổng cộng</th>
    </tr>
  </thead>
  <tbody>
    @foreach(Cart::content() as $p)
              <tr class="cart_item">
            <td class="product-name">
             {{ $p->name }}&nbsp;<strong class="product-quantity">× {{ $p->qty }}</strong>                          </td>
            <td class="product-total">
              <span class="amount">{{ $store->price($p->price*$p->qty) }}&nbsp;VNĐ</span>            </td>
          </tr>
    @endforeach
            </tbody>
  <tfoot>

    <tr class="cart-subtotal">
      <th>Tổng phụ</th>
      <td><span class="amount">{{ $store->price(Cart::total()) }}&nbsp;VNĐ</span></td>
    </tr>

    
    
      
      <tr class="shipping">
  <th>Vận chuyển</th>
  <td>
    
      Miễn phí vận chuyển       <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping" class="shipping_method">

      
    
    
      </td>
</tr>

      
    
    
                            
    
    <tr class="order-total">
      <th>Tổng cộng</th>
      <td><strong><span class="amount">{{ $store->price(Cart::total()) }}&nbsp;VNĐ</span></strong> </td>
    </tr>

    
  </tfoot>
</table>
  


<div id="payment" class="woocommerce-checkout-payment">
    <ul class="payment_methods methods">
    <li class="payment_method_bacs">
  <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" data-order_button_text="" checked="checked">

  <label for="payment_method_bacs">
    Chuyển khoản ngân hàng  </label>
      <div class="payment_box payment_method_bacs">
      <p>Vui lòng chuyển khoản và gửi số hóa đơn của bạn với bộ phận hỗ trợ.</p>
      <h3>Thông tin thanh toán</h3>
      <p>
        {{ nl2br($store->key('thongtinthanhtoan')) }}
      </p>
    </div>
  </li>
  </ul>
  
  <div class="form-row place-order">

    <noscript>Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn nhấp vào &lt;em&gt; Cập nhật giỏ hàng &lt;/ em&gt; trước khi bạn thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy.&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng" /&gt;</noscript>

   
    <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">
    
    
  </div>

  <div class="clear"></div>
</div>



    </div>

  
</form>

</div>

  </div>          


<div class="clear"></div>  
</div>
      </section>

@stop

@section('style')
  <style type="text/css">
  #label-different-address:hover {
    cursor: pointer !important;
  }
  </style>
@stop