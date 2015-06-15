@extends('layouts.store_admin')
@section('title') Thêm sản phẩm @stop
@section('primary')
<body>

    <div class="container" id="primary">

      <div class="starter-template">
        <h1>Thêm sản phẩm</h1>
        {{ Form::open(['url'=>$store->store_url('admin/san-pham'), 'method'=>'POST', 'class'=>'form-horizontal','files'=>true]) }}
        @include('includes.notifications')
          <div class="form-group">
            <label for="inputTitle" class="col-sm-2 control-label">Tên sản phẩm:</label>
            <div class="col-sm-6">
              {{ Form::text('title') }}
            </div>
          </div>
          <div class="form-group">
            <label for="inputTitle" class="col-sm-2 control-label">Danh mục:</label>
            <div class="col-sm-4">
              {{ Form::select('cat_id', StoreCategory::where('store_id', $store->id)->lists('name', 'id') ) }}
            </div>
          </div>
          <div class="form-group">
            <label for="inputTitle" class="col-sm-2 control-label">Giá:</label>
            <div class="col-sm-2">
              {{ Form::number('price', null, ['required']) }}
            </div>
          </div>
          <div class="form-group">
            <label for="inputTitle" class="col-sm-2 control-label">Chi tiết:</label>
            <div class="col-sm-6">
              {{ Form::textarea('description') }}
            </div>
          </div>
          <div class="form-group">
            <label for="inputTitle" class="col-sm-2 control-label">Hình ảnh:</label>
            <div class="col-sm-6">
              {{ Form::file('image', ['required']) }}
            </div>
          </div>

            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
              </div>
            </div>
        </form>

    </div><!-- /.container -->

@stop

@section('style')
  {{ HTML::style('assets/css/bootstrap-wysihtml5.css') }}
@stop
@section('script')
  {{ HTML::script('assets/js/wysihtml5-0.3.0.js') }}
  {{ HTML::script('assets/js/bootstrap-wysihtml5.js') }}
  <script type="text/javascript">
  $('textarea').wysihtml5({
    "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
    "emphasis": true, //Italics, bold, etc. Default true
    "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    "html": false, //Button which allows you to edit the generated HTML. Default false
    "link": false, //Button to insert a link. Default true
    "image": false, //Button to insert an image. Default true,
    "color": true //Button to change color of font  
  });
  </script>
@stop