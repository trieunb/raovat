@extends('layouts.storelayout')
@section('primary')

<section>
         <div class="center clear">
         

  <div class="content-sub">

        
            <h2 class="title"><span>Order Received</span></h2>

            <div class="woocommerce">
  
    <p>Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</p>

    <ul class="order_details">
      <li class="order">
        Đơn hàng:       <strong>{{ $order->order_number }}</strong>
      </li>
      <li class="date">
        Ngày:       <strong>{{ $order->order_date }}</strong>
      </li>
      <li class="total">
        Tổng cộng:        <strong><span class="amount">{{ $store->price(Cart::total()) }}&nbsp;VNĐ</span></strong>
      </li>
            <li class="method">
        Phương thức thanh toán:       <strong>Chuyển khoản ngân hàng</strong>
      </li>
          </ul>
    <div class="clear"></div>

  
<h2>Thông tin chuyển khoản</h2>
<p>
  {{ $store->key('thongtinthanhtoan') }}
</p>
 <h2>Chi tiết đơn hàng</h2>
<table class="shop_table order_details">
  <thead>
    <tr>
      <th class="product-name">Sản phẩm</th>
      <th class="product-total">Tổng</th>
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


<header>
  <h2>Chi tiết khách hàng</h2>
</header>
<table class="shop_table shop_table_responsive customer_details">
<tbody><tr><th>Email:</th><td data-title="Email">{{ $order->billing_email }}</td></tr><tr><th>Số điện thoại:</th><td data-title="Telephone">{{ $order->billing_phone }}</td></tr></tbody></table>


<div class="col2-set addresses">

  <div class="col-1">


    <header class="title">
      <h3>Địa chỉ thanh toán</h3>
    </header>
    <address>
      {{ $order->billing_address }}
    </address>


  </div><!-- /.col-1 -->

  <div class="col-2">

    <header class="title">
      <h3>Địa chỉ nhận hàng</h3>
    </header>
    <address>
      {{ $order->shipping_address }}  
    </address>

  </div><!-- /.col-2 -->

</div><!-- /.col2-set -->


<div class="clear"></div>

</div>

  </div>          

{{ Cart::destroy() }}
<div class="clear"></div>  
</div>
      </section>
@stop