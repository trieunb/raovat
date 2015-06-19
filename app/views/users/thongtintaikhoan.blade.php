@extends('layouts.layout')
@section('title','Thông Tin Tài Khoản')
@stop
@section('content')

	<h2>Thông tin tài khoản</h2>
	<div class="info">
		<table class="table table-bordered">
			<tr>
				<td class="col-xs-5">Username</td>
				<td class="col-xs-7">{{ $user->username  }}</td>
			</tr>
			<tr>
				<td class="col-xs-5">Email</td>
				<td class="col-xs-7">{{ $user->email }}</td>
			</tr>
			<tr>
				<td class="col-xs-5">Họ Tên</td>
				<td class="col-xs-7">{{ $user->full_name }}</td>
			</tr>
			<tr>
				<td class="col-xs-5">Số Điện Thoại</td>
				<td class="col-xs-7">{{ $user->phone }}</td>
			</tr>
			<tr>
				<td class="col-xs-5">Địa Chỉ</td>
				<td class="col-xs-7">{{ $user->address }}</td>
			</tr>
		</table>
		<div class="col-xs-12">
			<a href="" class="btn btn-info">chỉnh sửa thông tin tài khoản</a>
		</div>			
	</div>
	<p style="margin-top:80px;"><h2>Các tin đã đăng</h2></p>
	<div class="news">
		<table class="table table-bordered">
			<thead>
				<th>Tiên Đề</th>
				<th>Nội Dung</th>
				<th>Giá</th>
				<th>Loại Tin</th>
				<th>Quy Trình Vận Chuyển</th>
				<th>Lượt Xem</th>
				<th>Hình Ảnh</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($news as $k => $v)
				<tr>
					<td>{{ $v->tieude }}</td>
					<td>{{ $v->noidung }}</td>
					<td>{{ $v->gia }}</td>
					<td><?php if($v->loaitin == 0) echo "cần mua"; else echo "cần bán"; ?></td>
					<td>{{ $v->quytrinhvanchuyen }}</td>
					<td>{{ $v->luotxem }}</td>
					<td><img src="{{ asset($images[$k][0]) }}" class="img-thumbnail img-info"></td>
					<td>
						<a href="{{ URL::action('UserController@getEditDangTin',$v->id) }}">
							<p data-placement="top" data-toggle="tooltip" title="Edit">
								<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button>
							</p>
						</a>
			    		<a href="">
			    			<p data-placement="top" data-toggle="tooltip" title="Delete">
			    				<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button>
			    			</p>
			    		</a>
			    	</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@stop