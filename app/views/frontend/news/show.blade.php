@extends('layouts.layout')
@section('title') $news->tieude @stop
@section('content')
<div class="content">
	<h3 class="post-title">{{ $news->tieude }}</h3>
	<p class="post-content">
		{{ nl2br($news->noidung) }}
	</p>
	<div class="clearfix"></div>
	<table class="table table-hover table-bordered">
		<tbody>
			<tr>
				<td colspan="2"><h4>Thông tin người đăng</h4></td>
			</tr>
			<tr>
				<td>Tên: </td>
				<td>{{ $news->user->full_name }}</td>
			</tr>
			<tr>
				<td>Email: </td>
				<td>{{ $news->user->email }}</td>
			</tr>
			<tr>
				<td>Điện thoại: </td>
				<td>{{ $news->user->phone }}</td>
			</tr>
			<tr>
				<td>Email: </td>
				<td>{{ $news->user->address }}</td>
			</tr>
			<tr>
				<td>Ngày đăng: </td>
				<td>{{ $news->ngaydang }}</td>
			</tr>
			<tr>
				<td>Lượt xem: </td>
				<td>{{ $news->luotxem }}</td>
			</tr>
		</tbody>
	</table>
</div>
@stop

@section('style')
	<style type="text/css">
	h3.post-title {
		background-color: #B1D3CF;
  padding: 10px;
  color: #C20000;
	}
	</style>
@stop