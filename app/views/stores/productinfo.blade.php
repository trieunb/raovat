@extends('layouts.storelayout')

@section('primary')
	<section>
         <div class="center clear">
         
  <div class="kenshop-main">
  	<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
  		<a href="{{ $store->store_url() }}">Trang chủ</a> » 
  		<a href="{{ $store->store_url('danh-muc/'.$product->category->id) }}">{{ $product->category->name }}</a> » 
  		{{ $product->title }}
  		</nav>
    
      

<div itemscope="" itemtype="http://schema.org/Product" id="product-12" class="post-12 product type-product status-publish has-post-thumbnail product_cat-may-tinh shipping-taxable purchasable product-type-simple product-cat-may-tinh instock">

  <div class="images">

  <a href="{{ $store->image_url($product->image) }}" itemprop="image" class="woocommerce-main-image zoom" title="{{ $product->title }}" data-rel="prettyPhoto">
  {{ $store->image($product->image) }}
  </a>
  
</div>

  <div class="summary entry-summary">

    <h1 itemprop="name" class="product_title entry-title">{{ $product->title }}</h1>
  <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
    <div class="star-rating" title="4.00 / 5 điểm">
      <span style="width:80%">
        <strong itemprop="ratingValue" class="rating">4.00</strong> out of <span itemprop="bestRating">5</span>       based on <span itemprop="ratingCount" class="rating">1</span> customer rating     </span>
    </div>
    <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(Đánh giá của khách hàng)</a> </div>

<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

  <p class="price"><span class="amount">{{ $product->price() }}&nbsp;VNĐ</span></p>

  <meta itemprop="price" content="{{ $product->price }}">
  <meta itemprop="priceCurrency" content="VND">
  <link itemprop="availability" href="http://schema.org/InStock">

</div>
  <form class="cart" method="post" action="{{ $store->store_url('add-cart') }}" enctype="multipart/form-data">
    
    <div class="quantity"><input type="number" step="1" min="1" name="qty" value="1" title="SL" class="input-text qty text" size="4"></div>
    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <button type="submit" class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>

      </form>

  
<div class="product_meta">
  <span class="posted_in">Danh mục: <a href="{{ $store->store_url('danh-muc/'.$product->category->id) }}">{{ $product->category->name }}</a></span>
</div>

  </div><!-- .summary -->

  
  <div class="woocommerce-tabs">
    <ul class="tabs">
      
        <li class="description_tab active">
          <a href="#tab-description">Mô tả</a>
        </li>
<!-- 
      
        <li class="reviews_tab">
          <a href="#tab-reviews">Đánh giá (1)</a>
        </li>
 -->
          </ul>
    
      <div class="panel entry-content" id="tab-description" style="display: block;">
        

		<article class="post-content">
		{{ $product->description }}
		</article>
      </div>

    
      <div class="panel entry-content" id="tab-reviews" style="display: none;">
        <div id="reviews">
  <div id="comments">
    <h2>1 bình luận cho Laptop</h2>

    
      <ol class="commentlist">
        <li itemprop="reviews" itemscope="" itemtype="http://schema.org/Review" class="comment byuser comment-author-manager bypostauthor even thread-even depth-1" id="li-comment-45">

  <div id="comment-45" class="comment_container">

    <img alt="manager" src="http://1.gravatar.com/avatar/76112b752234bd933164c320e7ba5b11?s=60&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/76112b752234bd933164c320e7ba5b11?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
    <div class="comment-text">

      
        <div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" class="star-rating" title="Đánh giá 4 / 5">
          <span style="width:80%"><strong itemprop="ratingValue">4</strong> trên 5</span>
        </div>

      
      
        <p class="meta">
          <strong itemprop="author">manager</strong> – <time itemprop="datePublished" datetime="2015-05-09T15:59:53+00:00">May 9, 2015</time>:
        </p>

      
      <div itemprop="description" class="description"><p>Mở màn cho sự kiện này, CEO của Apple là Tim Cook đã công bố rằng iOS 7, hệ điều hành được Apple giới thiệu lần đầu vào tháng 6 vừa rồi. sẽ chính thức phát hành vào ngày 18 tháng 9 tới đây, dành cho các máy bao gồm iPhone 4 trở lên (iPhone 4S/iPhone 5), iPad 2 trở lên (iPad 3, iPad 4), iPad mini và iPod Touch Gen 5.</p>
</div>
    </div>
  </div>
</li><!-- #comment-## -->
      </ol>

      
      </div>

  
    <div id="review_form_wrapper">
      <div id="review_form">
                    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Thêm đánh giá <small><a rel="nofollow" id="cancel-comment-reply-link" href="/shop/may-tinh/laptop#respond" style="display:none;">Cancel reply</a></small></h3>
                  <form action="http://www.kenshoping.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                                                            <p class="comment-form-rating"><label for="rating">Đánh giá của bạn</label><p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p><select name="rating" id="rating" style="display: none;">
              <option value="">Đánh giá…</option>
              <option value="5">Rất tốt</option>
              <option value="4">Tốt</option>
              <option value="3">Trung bình</option>
              <option value="2">Không tệ</option>
              <option value="1">Rất Xấu</option>
            </select></p><p class="comment-form-comment"><label for="comment">Đánh giá của bạn</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>           
            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Gửi đi"> <input type="hidden" name="comment_post_ID" value="12" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p>          </form>
              </div><!-- #respond -->
            </div>
    </div>

  
  <div class="clear"></div>
</div>      </div>

      </div>


  <div class="related products clear">

    <h2 class="title"><span>Sản phẩm liên quan</span></h2>

    <div class="list-product clear">
<ul>
      @foreach(Product::where('store_id', $store->id)->where('cat_id', $product->cat_id)->limit(4)->get() as $p)
        <li class="box wow flipInX animated" style="visibility: hidden; -webkit-animation-name: none;">

  
  <a href="{{ $store->store_url('san-pham/'.$p->id) }}" class="img-product">
    <div class="screen">
            <div class="frame">
    <img width="300" height="256" src="{{ $store->image_url($p->image) }}" class="attachment-shop_catalog wp-post-image" alt="iphone">     </div>
    </div>
  </a>
  <a class="post-title" href="{{ $store->store_url('san-pham/'.$p->id) }}">{{ $p->title }}</a>
    
  <div class="product-rating">
    <div class="star-rating" title="2.00 / 5 điểm"><span style="width:40%"><strong class="rating">2.00</strong> trên 5</span></div> </div>

  <p class="price"><span class="amount">{{ $product->price() }}&nbsp;VNĐ</span></p>

  

  <a href="{{ $store->store_url('add-cart/'.$p->id) }}" rel="nofollow" data-product_id="" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Thêm vào giỏ hàng</a>
</li>
@endforeach
    </ul>
</div>
  </div>


  <meta itemprop="url" content="http://www.kenshoping.com/shop/may-tinh/laptop">

</div><!-- #product-12 -->


    
  </div>
  @include('includes.store_sidebar')
            </div>
  
<div class="clear"></div>  
</div>
      </section>
@stop