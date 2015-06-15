@extends('layouts.store_admin')
@section('primary')
<body>

    <div class="container" id="primary">

      <div class="starter-template">
        <h1>Cài đặt gian hàng</h1>
        <div class="clearfix"></div>
        {{ Form::open(['url'=>$store->store_url('admin/settings'), 'method'=>'POST', 'class'=>'form-horizontal', 'files'=>1]) }}
        @include('includes.notifications')
           <div class="form-group">
             <label for="inputName" class="col-sm-2 control-label">Tiêu đề trang:</label>
             <div class="col-sm-4">
               {{ Form::text('title', $settings['title']) }}
             </div>
           </div>
           <div class="form-group">
             <label for="" class="col-sm-2 control-label">Logo:</label>
             <div class="col-sm-4">
               {{ Form::file('logo') }}
               @if($settings['logo']) {{ $store->image($settings['logo']) }}@endif
             </div>
           </div>
           <div class="form-group">
             <label for="inputName" class="col-sm-2 control-label">Thông tin thanh toán:</label>
             <div class="col-sm-4">
               {{ Form::textarea('thongtinthanhtoan', $settings['thongtinthanhtoan'], ['rows'=>3]) }}
             </div>
           </div>
           <div class="form-group">
             <label for="inputName" class="col-sm-2 control-label">Địa chỉ:</label>
             <div class="col-sm-4">
               {{ Form::text('diachi', $settings['diachi']) }}
             </div>
           </div>
           <div class="form-group">
             <label for="inputName" class="col-sm-2 control-label">Điện thoại:</label>
             <div class="col-sm-4">
               {{ Form::text('dienthoai', $settings['dienthoai']) }}
             </div>
           </div>
           <div class="form-group">
             <label for="inputName" class="col-sm-2 control-label">Email:</label>
             <div class="col-sm-4">
               {{ Form::text('email', $settings['email']) }}
             </div>
           </div>
           
           <div class="form-group">
             <label for="inputName" class="col-sm-2 control-label">Facebook Fanpage:</label>
             <div class="col-sm-4">
               {{ Form::text('facebook', $settings['facebook']) }}
             </div>
           </div>
           <div class="form-group">
             <label for="inputName" class="col-sm-2 control-label">Twitter:</label>
             <div class="col-sm-4">
               {{ Form::text('twitter', $settings['twitter']) }}
             </div>
           </div>
           <div class="form-group">
             <label for="inputName" class="col-sm-2 control-label">Youtube Channel:</label>
             <div class="col-sm-4">
               {{ Form::text('youtube', $settings['youtube']) }}
             </div>
           </div>
         
             <div class="form-group">
               <div class="col-sm-10 col-sm-offset-2">
                 <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
               </div>
             </div>
         </form>
        
      </div>

    </div><!-- /.container -->

@stop