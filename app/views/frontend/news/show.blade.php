@extends('layouts.layout')
@section('title') {{ $news->tieude }} @stop
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
				<td>Địa chỉ: </td>
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
<div class="fb-like" data-href="http://www.canthoinfo.com/index.asp" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
<div class="fb-comments"
 data-href="http://www.canthoinfo.com/index.asp"
 data-width="100%" 
 data-colorscheme="light"
 data-numposts="1">
</div>
</div>

@stop

@section('style')
	<style type="text/css">
	h3.post-title {
		background-color: #B1D3CF;
  padding: 10px;
  color: #C20000;
	}
	.fb_iframe_widget, .fb_iframe_widget span,.fb_iframe_widget span iframe[style] {
    min-width: 100% !important;
    width: 100% !important;
}
	</style>
@stop