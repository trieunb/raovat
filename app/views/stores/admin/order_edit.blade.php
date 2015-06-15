@extends('layouts.store_admin')
@section('primary')
<body>

    <div class="container" id="primary">

      <div class="starter-template">
        <h2>Sửa đơn hàng {{ $order->order_number }}</h2>
        <div class="clearfix"></div>
        {{ Form::open(['url'=>$store->store_url('admin/orders/'.$order->id), 'method'=>'PUT', 'class'=>'form-horizontal']) }}
        <table class="table table-bordered">
        	<tbody>
        		<tr>
        			<td class="col-xs-2" colspan="2">Mã đơn hàng {{ $order->order_number }}</td>
        			
        		</tr>
        		<tr>
        			<td>Email</td>
        			<td>{{ Form::text('billing_email', $order->billing_email) }}</td>
        		</tr>
        		<tr>
        			<td>Ghi chú</td>
        			<td>{{ Form::textarea('shipping_note', $order->shipping_note, ['rows'=>3]) }}</td>
        		</tr>
        		<tr>
        			<td>Ngày mua</td>
                    <td>{{ Form::text('order_date', $order->order_date) }}</td>
        		</tr>
        		<tr>
        			<td>Tổng tiền</td>
        			<td>{{ $order->total() }}</td>
        		</tr>
        		<tr>
        			<td>Trạng thái đơn hàng</td>
        			<td>
                        {{ Form::select('order_status', [1=>'Chờ xác nhận', 2=>'Đã chuyển hàng', 3=>'Đã hủy'], $order->order_status) }}
						
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
        						<td>Họ</td>
                                <td>
                                    {{ Form::text('billing_first', $order->billing_first) }}
                                </td>
        					</tr>
                            <tr>
                                <td>Tên</td>
                                <td>
                                    {{ Form::text('billing_last', $order->billing_last) }}
                                </td>
                            </tr>
        					<tr>
        						<td>Công ty</td>
        						<td>
                                    {{ Form::text('billing_company', $order->billing_company) }}                  
                                </td>
        					</tr>
        					<tr>
        						<td>Địa chỉ</td>
                                <td>
                                    {{ Form::text('billing_address', $order->billing_address) }}                  
                                </td>
        					</tr>
        					<tr>
                                <td>Điện thoại</td>
                                <td>
                                    {{ Form::text('') }}
                                </td>
                            </tr>
        				</table>
        			</td>
        			<td>
        				<table class="table table-bordered">
        					<tr>
                                <td>Họ</td>
                                <td>
                                    {{ Form::text('shipping_first', $order->shipping_first) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Tên</td>
                                <td>
                                    {{ Form::text('shipping_last', $order->shipping_last) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Công ty</td>
                                <td>
                                    {{ Form::text('shipping_company', $order->shipping_company) }}                  
                                </td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>
                                    {{ Form::text('shipping_address', $order->shipping_address) }}                  
                                </td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td>
                                    {{ Form::text('billing_phone', $order->billing_phone) }}
                                </td>
                            </tr>
        				</table>
        			</td>
        			
        		</tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary">Lưu thay đổi</button>
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