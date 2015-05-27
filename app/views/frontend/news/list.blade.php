@extends('layouts.layout')

@section('content')
	<div class="content">
		<h3 class="panel-title"> 
			<a href="#">{{ ($cat_id>0)?Category::where('id', $cat_id)->first()->tendanhmuc:"Tất cả các danh mục" }}</a>
		</h3>
		@foreach($news as $key => $new)
		<div class="panel panel-success">
			  <div class="panel-heading">
				  	<div class="row">
					  <div class="col-sm-12">
					  	<p class="pull-left">{{ $new->tieude }}</p>
					  	<p class="pull-right">{{ $new->created_at->diffForHumans() }}</p>
					  </div>
					</div>
			  </div>
			  <div class="panel-body">
			  	<div class="col-sm-12">
			  		<div class="col-sm-4">
			  		<div class="post-image">
			  			<?php if ($images[$key] != null) { ?>
			  				<img src="{{ asset($images[$key][0]) }}" class="img-responsive img-post">
			  			<?php } else { ?>
			  				<img src="{{ asset('images/dangtin/img.jpg') }}" class="img-responsive img-post">
			  			<?php } ?>
			  		</div>
			  		</div>
			  		<div class="col-sm-8">
			  			{{ $new->noidung }}
			  			<div class="xemchitiet"><a href="{{ URL::action('NewsController@getXemTin',$new->id) }}">Xem chi tiết</a></div>
			  		</div>
					
				</div>
			  </div>
		</div>
		@endforeach
	</div>
@stop
