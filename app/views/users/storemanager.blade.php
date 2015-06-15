@extends('layouts.layout')
@section('title') Gian hàng của bạn @stop
@section('content')
<div class="content">
	<h3>Quản lý gian hàng của bạn</h3>
	@if($store)
	<div class="col-xs-2"></div>
	<div class="col-xs-4">
		<a href="{{ URL::to("gian-hang/".$store->store_slug) }}" style="height: 50px; font-size: 18px;" class="btn btn-block btn-success" target="_blank">Tới gian hàng của bạn</a>
	</div>
	<div class="col-xs-4">
		<a href="{{ URL::to("gian-hang/".$store->store_slug."/admin") }}" style="height: 50px; font-size: 18px;" class="btn btn-block btn-success" target="_blank">Tới trang quản trị gian hàng</a>
	</div>
	<div class="col-xs-2"></div>
	@else 
	<h4>Bạn chưa có gian hàng. <a href="{{ URL::to('gian-hang/tao-moi') }}">Bấm vào đây</a> để tạo gian hàng ngay.</h4>
	@endif
</div>
@stop
