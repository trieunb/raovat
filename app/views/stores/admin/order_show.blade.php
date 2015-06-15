@extends('layouts.store_admin')
@section('primary')
<body>

    <div class="container" id="primary">

      <div class="starter-template">
        <h2>Chi tiết đơn hàng {{ $order->order_number }}</h2>
        <div class="clearfix"></div>
        <a href="{{ $store->store_url('admin/orders/'.$order->id.'/edit') }}" class="btn btn-success">Sửa đơn hàng</a>
        <table class="table table-bordered">
        	<tbody>
        		<tr>
        			<td class="col-xs-2" colspan="2">Mã đơn hàng {{ $order->order_number }}</td>
        			
        		</tr>
        		<tr>
        			<td>Email</td>
        			<td>{{ $order->billing_email }}</td>
        		</tr>
        		<tr>
        			<td>Ghi chú</td>
        			<td>{{ $order->shipping_note }}</td>
        		</tr>
        		<tr>
        			<td>Ngày mua</td>
        			<td>{{ $order->order_date }}</td>
        		</tr>
        		<tr>
        			<td>Tổng tiền</td>
        			<td>{{ $order->total() }}</td>
        		</tr>
        		<tr>
        			<td>Trạng thái đơn hàng</td>
        			<td>
						@if($order->order_status == 1)
		                  <span class="label label-warning">Chờ xác nhận</span>
		                @elseif($order->order_status == 2)
		                  <span class="label label-success">Đã chuyển hàng</span>
		                @else
		                  <span class="label label-danger">Đã hủy</span>
		                @endif
        			</td>
        		</tr>
        		
        		<tr class="background">
        			<td class="col-xs-6">Thông tin người gửi</td>
        			<td class="col-xs-6">Thông tin người nhận</td>
        			
        		</tr>
        		<tr>
        			<td>
        				<table class="table table-bordered">
        					<tr>
        						<td>Họ tên</td>
        						<td>{{ $order->billing_first ." ".$order->billing_last }}</td>
        					</tr>
        					<tr>
        						<td>Công ty</td>
        						<td>{{ $order->billing_company }}</td>
        					</tr>
        					<tr>
        						<td>Địa chỉ</td>
        						<td>{{ $order->billing_address }}</td>
        					</tr>
        					<tr>
        						<td>Điện thoại</td>
        						<td>&nbsp;</td>
        					</tr>
        				</table>
        			</td>
        			<td>
        				<table class="table table-bordered">
        					<tr>
        						<td>Họ tên</td>
        						<td>{{ $order->shipping_first ." ".$order->shipping_last }}</td>
        					</tr>
        					<tr>
        						<td>Công ty</td>
        						<td>{{ $order->shipping_company }}</td>
        					</tr>
        					<tr>
        						<td>Địa chỉ</td>
        						<td>{{ $order->shipping_address }}</td>
        					</tr>
        					<tr>
        						<td>Điện thoại</td>
        						<td>{{ $order->billing_phone }}</td>
        					</tr>
        				</table>
        			</td>
        			
        		</tr>
        		<tr class="background">
        			<td class="" colspan="2"><strong>Chi tiết đơn hàng</strong></td>
        		</tr>
        		<tr class="background">
        			<td>Tên sản phẩm</td>
        			<td>Số lượng / Giá</td>
        		</tr>
        		@if($order->detail->count())
				@foreach($order->detail as $product)
				<tr>
					<td>
						@if($product->product->title) {{ HTML::link($store->store_url('san-pham/'.$product->product_id), $product->product->title, ['target'=>'_blank']) }} @endif
					</td>
					<td>
						{{ $product->qty }} * {{ $product->price() }} = {{ $product->total() }}
					</td>
				</tr>
				@endforeach
        		@endif
        		
        	</tbody>
        </table>
        
      </div>

    </div><!-- /.container -->
<div class="clearfix" style="margin-bottom: 50px;"></div>
@stop