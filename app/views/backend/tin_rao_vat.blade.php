@extends('backend.dashboard')
@section('style')
	{{ HTML::style('assets/css/style.css') }}
@stop
@section('page-header')
<p>
	<strong>Tin Rao Vặt</strong>
</p>
@stop
@section('content')
    <div class="table-responsive">  
    <table id="mytable" class="table table-bordred table-striped">
	   	<thead>
	   		<th>Số TT</th>
	      	<th>Tiêu Đề</th>
	        <th>Giá</th>
	        <th>vip_to</th>
	        <th>Trạng Thái</th>
	        <th>Edit</th>
	        <th>Delete</th>
	   	</thead>
		<tbody>
			 <?php  $stt = 1 ?>
			@foreach($tinraovat as $key => $value)
		    <tr>
		    	<?php 
		    		if($page > 1) {
		    	?>
		    		<td>{{ $stt + 10*($page-1)  }}</td>
		    	
		    	<?php } else{ ?>
		    	<td>{{ $stt  }}</td>
		    	<?php } ?>
		    	
			    <td>{{ $value->tieude }}</td>
			    <td>{{ $value->gia }}</td>
			    <td>{{ $value->vip_to }}</td>
			    <td><a href="{{ URL::action('AdminAuthController@getUpdateTrangThai',$value->id) }}"><p data-placement="top" data-toggle="tooltip" title="action"><?php if($value->trangthai == 1)  echo "Enable"; else echo "Disable"; ?></p></a></td>
			    <td><a href=""><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
			    <td><a href="{{ URL::action('AdminAuthController@getDeleteTinRaoVat',$value->id) }}"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
			</tr>
			<?php  $stt++ ?>
			@endforeach
		</tbody>
        
	</table>

	<div class="clearfix"></div>
		<ul class="pagination pull-right">
		 <!--  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li> -->
		 
		  {{ $tinraovat->links() }}

		  <!-- <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li> -->
		</ul>
                
</div>       

	
@stop
