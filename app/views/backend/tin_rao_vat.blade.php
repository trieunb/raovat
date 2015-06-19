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
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-center"><strong>Tin Rao Vặt</strong></h4>
        </div>
        <div class="panel-body text-center">
    <div class="table-responsive">  
    <table id="mytable" class="table table-bordred table-striped">
	   	<thead>
	   		<th>Số TT</th>
	      	<th>Tiêu Đề</th>
	        <th>Giá</th>
	        <th>vip_to</th>
	        <th>Trạng Thái</th>
	        <th colspan="2" class="text-center" style="margin-left:-10px;">action</th>

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
			    <td><a href=""><span class="fa fa-edit pull-right bigicon"></span></a></td>
			    <td><a href="{{ URL::action('AdminAuthController@getDeleteTinRaoVat',$value->id) }}"><button type="button" class="sui-button sui-unselectable deleteButton sui-delete"><img src="http://www.prepbootstrap.com/Content/images/template/BootstrapEditableGrid/delete.png"><span>Delete</span></button></a></td>
			</tr>
			<?php  $stt++ ?>
			@endforeach
		</tbody>
        
	</table>

	<div class="clearfix"></div>
		<div class="pagination">
		 <!--  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li> -->
		 
		  {{ $tinraovat->links() }}

		  <!-- <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li> -->
		</div>
                
</div>       
</div>
    </div>
</div>
	
@stop
