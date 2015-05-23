@extends('layouts.layout')

@section('content')
	<div class="content">
		<h3 class="panel-title"> 
			<a href="#">{{ ($cat_id>0)?Category::where('id', $cat_id)->first()->tendanhmuc:"Tất cả các danh mục" }}</a>
		</h3>
		@foreach($news as $new)
		<div class="panel panel-success">
			  <div class="panel-heading">
					{{ $new->tieude }}
			  </div>
			  <div class="panel-body">
					{{ $new->created_at->diffForHumans() }}
			  </div>
		</div>
		@endforeach
	</div>
@stop
