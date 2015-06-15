@extends('layouts.store_admin')
@section('primary')
<body>

    <div class="container" id="primary">

      <div class="starter-template">
        <h1>Quản lý Đơn hàng</h1>
        @include('includes.notifications')
        <!--<a href="{{ $store->store_url('admin/orders/create') }}" class="btn btn-success">Thêm đơn hàng</a>-->
        <div class="clearfix"></div>
        <div class="col-xs-6">
          @if(count($orders)) <span>Hiển thị từ {{ $orders->getFrom() }} đến {{ $orders->getTo() }} trong tổng số {{ $orders->getTotal() }}</span> @endif
        </div>
        <div class="col-xs-6">
          <div id="pagination" class="pull-right">
            {{ $orders->links() }}
          </div>
        </div>
        <table class="table table-hover table-bordered table-order">
          <thead>
            <tr>
              <th>Order Number</th>
              <th>Địa chỉ thanh toán</th>
              <th>Địa chỉ nhận hàng</th>
              <th>Ngày thanh toán</th>
              <th>Trạng thái</th>
              <th>Tổng tiền</th>
              <th>Chỉnh sửa</th>
            </tr>
          </thead>
          <tbody>
            @if(count($orders))
            @foreach($orders as $order)
            <tr>
              <td>{{ $order->order_number }}</td>
             
              <td>
                {{ $order->billing_first ." ". $order->billing_last }}<br>
                {{ $order->billing_company }}@if($order->billing_company!='')<br>@endif
                {{ $order->billing_address }}@if($order->billing_address!='')<br>@endif
              </td>
              <td>
                {{ $order->shipping_first ." ". $order->shipping_last }}<br>
                {{ $order->shipping_company }}@if($order->shipping_company!='')<br>@endif
                {{ $order->shipping_address }}@if($order->shipping_address!='')<br>@endif
              </td>
              <td>
                {{ $order->order_date }}
              </td>
              <td>
                @if($order->order_status == 1)
                  <span class="label label-warning">Chờ xác nhận</span>
                @elseif($order->order_status == 2)
                  <span class="label label-success">Đã chuyển hàng</span>
                @else
                  <span class="label label-danger">Đã hủy</span>
                @endif
              </td>
              <td>
                {{ $order->total() }}
              </td>
              <td>
                {{ Form::open(['url'=>$store->store_url('admin/orders/'.$order->id), 'method'=>'DELETE']) }}
                  <a href="{{ $store->store_url('admin/orders/'.$order->id) }}" class="btn btn-sm btn-success">Chi tiết</a>
                  <a href="{{ $store->store_url('admin/orders/'.$order->id.'/edit') }}" class="btn btn-sm btn-info">Sửa</a>
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('bạn có muốn xóa đơn hàng này ?');">Xóa</button>
                </form>
                
              </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="6">Không có đơn hàng nào</td>
            </tr>
            @endif
          </tbody>
        </table>
        <div class="col-xs-6">
          @if(count($orders)) <span>Hiển thị từ {{ $orders->getFrom() }} đến {{ $orders->getTo() }} trong tổng số {{ $orders->getTotal() }}</span> @endif
        </div>
        <div class="col-xs-6">
          <div id="pagination" class="pull-right">
            {{ $orders->links() }}
          </div>
        </div>
        
      </div>

    </div><!-- /.container -->

@stop