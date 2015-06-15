@extends('layouts.store_admin')
@section('primary')
<body>

    <div class="container" id="primary">

      <div class="starter-template">
        <h1>Thêm danh mục</h1>
        <div class="clearfix"></div>
        {{ Form::open(['url'=>$store->store_url('admin/category/'), 'method'=>'POST', 'class'=>'form-horizontal']) }}
           <div class="form-group">
             <label for="inputName" class="col-sm-2 control-label">Tên danh mục:</label>
             <div class="col-sm-4">
               {{ Form::text('name') }}
             </div>
           </div>
         
             <div class="form-group">
               <div class="col-sm-10 col-sm-offset-2">
                 <button type="submit" class="btn btn-primary">Thêm mới</button>
               </div>
             </div>
         </form>
        
      </div>

    </div><!-- /.container -->

@stop