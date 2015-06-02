@extends('layouts.storelayout')
@section('primary')
      <section>
         <div class="center clear">
                       <div class="sidebar">
               <div class="dcjq-vertical-mega-menu">
                  <h2 class="title"><i class="fa fa-th-list"></i> Danh mục</h2>
                  <ul id="mega" class="menu">
                  @foreach($cats as $cat)
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="{{ $store->store_url('danh-muc/'.$cat->id) }}">{{ $cat->name }}</a></li>
                  @endforeach

</ul>               </div>
               
            </div>
            <div class="main">
               <!-- Insert to your webpage where you want to display the slider -->
                                          <div id="amazingslider">
                    <ul class="amazingslider-slides">
                                        <li>
                                        {{ $store->image('slide1.png', null, ['class'=>'attachment-slide-full wp-post-image', 'width'=>'950', 'height'=>'450']) }}
                                        </li>
                                        <li>
                                        {{ $store->image('slide2.jpg', null, ['class'=>'attachment-slide-full wp-post-image', 'width'=>'960', 'height'=>'450']) }}
                                        </li>
                                        <li>
                                         <li>
                                        {{ $store->image('slide3.jpg', null, ['class'=>'attachment-slide-full wp-post-image', 'width'=>'960', 'height'=>'450']) }}
                                        </li>
                                         <li>
                                        {{ $store->image('slide4.png', null, ['class'=>'attachment-slide-full wp-post-image', 'width'=>'960', 'height'=>'450']) }}
                                        </li>
                                                    </ul>
                    <ul class="amazingslider-thumbnails">
                                         <li>
                                        {{ $store->image('slide1-small.png', null, ['class'=>'attachment-slide-thumbnail wp-post-image', 'width'=>'240', 'height'=>'80']) }}
                                        </li>
                                        <li>
                                        {{ $store->image('slide2-small.jpg', null, ['class'=>'attachment-slide-thumbnail wp-post-image', 'width'=>'240', 'height'=>'80']) }}
                                        </li>
                                        <li>
                                        {{ $store->image('slide3-small.jpg', null, ['class'=>'attachment-slide-thumbnail wp-post-image', 'width'=>'240', 'height'=>'80']) }}
                                        </li>
                                        <li>
                                        {{ $store->image('slide4-small.png', null, ['class'=>'attachment-slide-thumbnail wp-post-image', 'width'=>'240', 'height'=>'80']) }}
                                        </li>
                                       
                                                    </ul>
                  </div>
              
            </div>
             <div class="list-product woocommerce"><h2 class="title"><span><i class="fa fa-star-half-o"></i> SẢN PHẨM MỚI</span></h2><div id="product">
<a class="buttons next" href="#">right</a>
<a class="buttons prev" href="#">left</a>
<div class="viewport">
<ul class="overview">
			@foreach($newest as $product)
      <li class="box wow fadeInDown animated">
      <a class="post-img" href="{{ $store->store_url('san-pham/'.$product->id) }}">
        <div class="screen">
                <div class="frame">
          {{ $store->image($product->image, ['width'=>450, 'height'=>385, 'class'=>'attachment-large wp-post-image']) }}</div>
        </div>
      </a>
      <a class="post-title" href="{{ $store->store_url('san-pham/'.$product->id) }}" rel="bookmark" title="Click để xem chi tiết sản phẩm {{ $product->title }}">
                {{ $product->title }}            </a>
                        <div class="product-rating">
                    <div class="star-rating" title="{{ $product->vote }} / 5 điểm"><span style="width:{{ ($product->vote>0)?(100/$product->vote):0 }}%"><strong itemprop="ratingValue" class="rating">{{ $product->vote }}</strong> trên 5</span></div>            </div>
                        <div class="price">
                 <span class="amount">{{ $product->price() }}&nbsp;VNĐ</span>            </div>
    </li>
      @endforeach
			
	</ul>
</div>
</div>
</div> <div class="list-product woocommerce"><h2 class="title"><span><i class="fa fa-star-half-o"></i> SẢN PHẨM NGẪU NHIÊN</span></h2><ul>
      @foreach($random as $product)
      <li class="box wow fadeInDown animated">
      <a class="post-img" href="{{ $store->store_url('san-pham/'.$product->id) }}">
        <div class="screen">
                <div class="frame">
          {{ $store->image($product->image, ['width'=>450, 'height'=>385, 'class'=>'attachment-large wp-post-image']) }}</div>
        </div>
      </a>
      <a class="post-title" href="{{ $store->store_url('san-pham/'.$product->id) }}" rel="bookmark" title="Click để xem chi tiết sản phẩm {{ $product->title }}">
                {{ $product->title }}            </a>
                        <div class="product-rating">
                    <div class="star-rating" title="{{ $product->vote }} / 5 điểm"><span style="width:{{ ($product->vote>0)?(100/$product->vote):0 }}%"><strong itemprop="ratingValue" class="rating">{{ $product->vote }}</strong> trên 5</span></div>            </div>
                        <div class="price">
                 <span class="amount">{{ $product->price() }}&nbsp;VNĐ</span>            </div>
    </li>
      @endforeach
		
	</ul>
</div> 

<div class="clear"></div>  
</div>
      </section>
@stop