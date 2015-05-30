@extends('backend.dashboard')
@section('style')
	{{ HTML::style('assets/css/style.css') }}
@stop
@section('page-header')
<p>
	<strong>Danh Mục</strong>
	<a href="{{ URL::action('AdminAuthController@getAddDanhMuc') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
</p>
@stop
@section('content')
    <div class="table-responsive">  
    <table id="mytable" class="table table-bordred table-striped">
	   	<thead>
	   		<th>Số TT</th>
	      	<th>Tên Danh Mục</th>
	        <th>Ngày Tạo</th>
	        <th>Ngày Cập Nhập</th>
	        <th>Edit</th>
	        <th>Delete</th>
	   	</thead>
		<tbody>
			 <?php  $stt = 1 ?>
			@foreach($danhmuc as $key => $value)
		    <tr>
		    	<?php 
		    		if($page > 1) {
		    	?>
		    		<td>{{ $stt + 5*($page-1)  }}</td>
		    	
		    	<?php } else{ ?>
		    	<td>{{ $stt  }}</td>
		    	<?php } ?>
		    	
			    <td>{{ $value->tendanhmuc }}</td>
			    <td>{{ $value->created_at }}</td>
			    <td>{{ $value->updated_at }}</td>

			    <td><a href="{{ URL::action('AdminAuthController@getEditDanhMuc',$value->id) }}"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
			    <td><a href="{{ URL::action('AdminAuthController@getDeleteDanhMuc',$value->id) }}"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
			</tr>
			<?php  $stt++ ?>
			@endforeach
		</tbody>
        
	</table>

	<div class="clearfix"></div>
		<ul class="pagination pull-right">
		 <!--  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li> -->
		 
		  {{ $danhmuc->links() }}

		  <!-- <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li> -->
		</ul>
                
</div>       

	
@stop
