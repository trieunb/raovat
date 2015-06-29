@extends('backend.dashboard')
@section('style')
	{{ HTML::style('assets/css/style.css') }}
@stop
@section('page-header')
<p>
	<strong>Tin Tuyển Dụng</strong>
</p>
@stop
@section('content')

		<table class="table table-bordered">
			<thead>
				<th>Tên Cty</th>
				<th>Địa chỉ</th>
				<th>Lĩnh vực</th>
				<th>Người đăng tin</th>
				<th>chức vụ</th>
				<th>Số điện thoại</th>
				<th>Email</th>
				<th>Trạng thái</th>
				<th colspan="2" class="text-center">action</th>
			</thead>
			<tbody>
			@foreach($tuyendung as $k => $v)
				<tr>
					<td>{{ $v->tencty }}</td>
					<td>{{ $v->diachi }}</td>
					<td>{{ $v->linhvuc }}</td>
					<td>{{ $v->nguoidangtin }}</td>
					<td>{{ $v->chucvu }}</td>
					<td>{{ $v->sodienthoai }}</td>
					<td>{{ $v->email }}</td>
					<td>
						<a href="{{ URL::action('AdminAuthController@getTrangThaiTd',$v->id) }}">
							@if($v->trangthai == 0)
								<span class="label label-warning">Not Active</span>
							@else
								<span class="label label-primary">Active</span>
							@endif
						</a>
					</td>
					<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    				<td><a onclick="return confirm('Are you sure you want to Remove?');" href="{{ URL::action('AdminAuthController@getDeleteTd',$v->id) }}"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<div class="clearfix"></div>
		<div class="pagination">
		  {{ $tuyendung->links() }}
		</div>

@stop