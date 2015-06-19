
@extends('layouts.layout')
@section('title') {{ $news->tieude }} @stop
@section('content')
<div class="content">
	<div class="title-post">
		<h3 class="post-title">{{ $news->tieude }}</h3>
	</div>
<div class="thumb-post">
<div class="row">
	<div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
          <div class="carousel-inner">

                <?php foreach ($images as $key => $value) { ?>

                <div class="item active">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  	<p class="img-post"><img src="{{ asset($value) }}" class="img-responsive img-post"><span>Hình Ảnh {{1+$key}}</span></p>
                  </div>
                </div>

                <?php } ?>
          </div>
          <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> -->
        </div>
    </div>
</div>
</div>	


	<div class="content-post">
		<p class="post-content">
			{{ nl2br($news->noidung) }}
		</p>
	</div>
	<div class="clearfix"></div>
	<table class="table table-hover table-bordered">
		<tbody>
			<tr>
				<td colspan="2"><h4>Thông tin người đăng</h4></td>
			</tr>
			<tr>
				<td>Tên: </td>
				<td>{{ $news->name }}</td>
			</tr>
			<tr>
				<td>Email: </td>
				<td>{{ $news->email }}</td>
			</tr>
			<tr>
				<td>Điện thoại: </td>
				<td>{{ $news->phone }}</td>
			</tr>
			<tr>
				<td>Địa chỉ: </td>
				<td>{{ $news->address }}</td>
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
<div class="fb-like" data-href="{{ URL::to('rao-vat/xem-tin',$news->id) }}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="fb-comments"
 data-href="{{ URL::to('rao-vat/xem-tin',$news->id) }}"
 data-width="100%" 
 data-colorscheme="light"
 data-numposts="1">
</div>
</div>

@stop

@section('style')
{{ HTML::style('assets/css/Carousel.css') }}
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

			p.img-post span {
  color: rgb(95, 176, 228);
  font-size: 15px;
}

		
	</style>

@stop
@section('script')
{{ HTML::script('assets/js/carousel.js') }}
@stop