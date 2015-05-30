@extends('backend.dashboard')
@section('style')
	{{ HTML::style('assets/css/style.css') }}
@stop
@section('page-header')
<p>
	<strong>Thành Viên</strong>
</p>
@stop
@section('content')
    <div class="table-responsive">  
    <table id="mytable" class="table table-bordred table-striped">
	   	<thead>
	      	<th>UserName</th>
	        <th>Full Name</th>
	        <th>Address</th>
	        <th>Email</th>
	        <th>Contact</th>
	        <th>Action</th>
	        <th>Edit</th>
	        <th>Delete</th>
	   	</thead>
		<tbody>
			@foreach($user as $key => $value)
		    <tr>
			    <td>{{ $value->username }}</td>
			    <td>{{ $value->full_name }}</td>
			    <td>{{ $value->address }}</td>
			    <td>{{ $value->email }}</td>
			    <td>{{ $value->phone }}</td>
			    <td><a href="{{ URL::action('AdminAuthController@getUpdateActive',$value->id) }}"><p data-placement="top" data-toggle="tooltip" title="action"><?php if($value->activated == 1)  echo "Enable"; else echo "Disable"; ?></p></a></td>
			    <td><a href=""><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
			    <td><a href="{{ URL::action('AdminAuthController@getDeleteUser',$value->id) }}"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
			</tr>
			@endforeach
		</tbody>
        
	</table>

	<div class="clearfix"></div>
		<ul class="pagination pull-right">
		 <!--  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li> -->
		 
		  {{ $user->links() }}

		  <!-- <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li> -->
		</ul>
                
</div>       

	
@stop
