@extends('layouts.layout')

@section('content')
	<div class="content">
		<h3>Tin mới đăng</h3>
		<div class="row">
			
			<div class="col-xs-12">
			@foreach($news as $key => $new)
				<div class="row contet-news">
					<div class="col-xs-3">
						<?php if ($images[$key] != null) { ?>
			  				<img class="img-thumbnail" src="{{ asset($images[$key][0]) }}" class="img-responsive img-post">
			  			<?php } else { ?>
			  				<img class="img-thumbnail" src="{{ asset('images/dangtin/img.jpg') }}" class="img-responsive img-post">
			  			<?php } ?>
					</div>
					<div class="col-xs-9">
						<p>
							<a class="pull-left" href="{{ URL::action('NewsController@getXemTin',$new->id) }}">{{ $new->tieude }}</a><br>
							<span class="pull-right">{{ $new->created_at->diffForHumans() }}</span>
						</p>
						<p><span class="index-company"><strong>Người đăng</strong>: {{ $new->name }} - <strong>địa chỉ</strong>: {{ $new->address }}</span></p>
					</div>
				</div>
			@endforeach	
			<div class="pull-right">
				{{ $news->links() }}
			</div>
			</div>
			
			
		</div>
	</div>
	<hr>
	<div class="row">
		<h2>Nhà tài trợ</h2>
		<div class="col-md-4">
			<div class="thumbnail">
				{{ HTML::image('assets/img/post.jpg') }}
				<div class="caption">
					<h4>
						<a href="#">Công ty TNHH Company</a>
					</h4>
					<p>
						Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
					</p>
					<p>
						<a href="#" class="btn btn-info btn-cantho">Xem</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				{{ HTML::image('assets/img/post.jpg') }}
				<div class="caption">
					<h4>
						<a href="#">Công ty TNHH Company</a>
					</h4>
					<p>
						Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
					</p>
					<p>
						<a href="#" class="btn btn-info btn-cantho">Xem</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				{{ HTML::image('assets/img/post.jpg') }}
				<div class="caption">
					<h4>
						<a href="#">Công ty TNHH Company</a>
					</h4>
					<p>
						Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
					</p>
					<p>
						<a href="#" class="btn btn-info btn-cantho">Xem</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				{{ HTML::image('assets/img/post.jpg') }}
				<div class="caption">
					<h4>
						<a href="#">Công ty TNHH Company</a>
					</h4>
					<p>
						Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
					</p>
					<p>
						<a href="#" class="btn btn-info btn-cantho">Xem</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				{{ HTML::image('assets/img/post.jpg') }}
				<div class="caption">
					<h4>
						<a href="#">Công ty TNHH Company</a>
					</h4>
					<p>
						Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
					</p>
					<p>
						<a href="#" class="btn btn-info btn-cantho">Xem</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				{{ HTML::image('assets/img/post.jpg') }}
				<div class="caption">
					<h4>
						<a href="#">Công ty TNHH Company</a>
					</h4>
					<p>
						Công ty TNHH Company là một công ty lớn chuyên về lĩnh vực IT.
					</p>
					<p>
						<a href="#" class="btn btn-info btn-cantho">Xem</a>
					</p>
				</div>
			</div>
		</div>
	</div>
@stop