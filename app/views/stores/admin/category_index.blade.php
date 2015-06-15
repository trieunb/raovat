@extends('layouts.store_admin')
@section('primary')
<body>

    <div class="container" id="primary">

      <div class="starter-template">
        <h1>Quản lý danh mục</h1>
        @include('includes.notifications')
        <a href="{{ $store->store_url('admin/category/create') }}" class="btn btn-success">Thêm sản phẩm</a>
        <div class="clearfix"></div>
        <div class="col-xs-6">
          @if(count($categories)) <span>Hiển thị từ {{ $categories->getFrom() }} đến {{ $categories->getTo() }} trong tổng số {{ $categories->getTotal() }}</span> @endif
        </div>
        <div class="col-xs-6">
          <div id="pagination" class="pull-right">
            {{ $categories->links() }}
          </div>
        </div>
        <table class="table table-hover table-bordered table-category">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên danh mục</th>
              <th>Số sản phẩm</th>
              <th>Chỉnh sửa</th>
            </tr>
          </thead>
          <tbody>
            @if(count($categories))
            @foreach($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
             
              <td>
                {{ $category->name }}
              </td>
              <td>
                {{ $category->product->count() }}
              </td>
              <td>
                {{ Form::open(['url'=>$store->store_url('admin/category/'.$category->id), 'method'=>'DELETE']) }}
                  <a href="{{ $store->store_url('admin/category/'.$category->id.'/edit') }}" class="btn btn-info">Sửa</a>
                  <button type="submit" class="btn btn-danger" onclick="return confirm('bạn có muốn xóa danh mục này ?');">Xóa</button>
                </form>
                
              </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="6">Không có danh mục nào</td>
            </tr>
            @endif
          </tbody>
        </table>
        <div class="col-xs-6">
          @if(count($categories)) <span>Hiển thị từ {{ $categories->getFrom() }} đến {{ $categories->getTo() }} trong tổng số {{ $categories->getTotal() }}</span> @endif
        </div>
        <div class="col-xs-6">
          <div id="pagination" class="pull-right">
            {{ $categories->links() }}
          </div>
        </div>
        
      </div>

    </div><!-- /.container -->

@stop