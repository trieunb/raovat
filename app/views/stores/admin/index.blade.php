@extends('layouts.store_admin')
@section('primary')
<body>

    <div class="container" id="primary">
      <div class="starter-template">
        <h1>Quản lý sản phẩm</h1>
        @include('includes.notifications')
        <a href="{{ $store->store_url('admin/san-pham/create') }}" class="btn btn-success">Thêm sản phẩm</a>
        <div class="clearfix"></div>
        <div class="col-xs-6">
          @if(count($products)) <span>Hiển thị từ {{ $products->getFrom() }} đến {{ $products->getTo() }} trong tổng số {{ $products->getTotal() }}</span> @endif
        </div>
        <div class="col-xs-6">
          <div id="pagination" class="pull-right">
            {{ $products->links() }}
          </div>
        </div>
        <table class="table table-hover table-bordered table-product">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên sản phẩm</th>
              <th>Giá</th>
              <th>Hình ảnh</th>
              <th>Danh mục</th>
              <th>Chỉnh sửa</th>
            </tr>
          </thead>
          <tbody>
            @if(count($products))
            @foreach($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>
                {{ HTML::link($store->store_url('san-pham/'.$product->id), $product->title, ['target'=>'_blank']) }}
              </td>
              <td>
                {{ $product->price() }}
              </td>
              <td>
                {{ $store->image($product->image) }}
              </td>
              <td>
                {{ $product->category->name }}
              </td>
              <td>
                {{ Form::open(['url'=>$store->store_url('admin/san-pham/'.$product->id), 'method'=>'DELETE']) }}
                  <a href="{{ $store->store_url('admin/san-pham/'.$product->id.'/edit') }}" class="btn btn-info">Sửa</a>
                  <button type="submit" class="btn btn-danger" onclick="return confirm('bạn có muốn xóa sản phẩm này ?');">Xóa</button>
                </form>
                
              </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="6">Bạn chưa có sản phẩm nào</td>
            </tr>
            @endif
          </tbody>
        </table>
        <div class="col-xs-6">
          @if(count($products)) <span>Hiển thị từ {{ $products->getFrom() }} đến {{ $products->getTo() }} trong tổng số {{ $products->getTotal() }}</span> @endif
        </div>
        <div class="col-xs-6">
          <div id="pagination" class="pull-right">
            {{ $products->links() }}
          </div>
        </div>
        
      </div>

    </div><!-- /.container -->

@stop