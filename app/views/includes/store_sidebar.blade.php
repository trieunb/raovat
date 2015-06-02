<div class="kenshop-sidebar">
               <div class="dcjq-vertical-mega-menu">
                  <h2 class="title"><i class="fa fa-th-list"></i> Danh mục</h2>
                  <ul id="mega-sidebar" class="menu left">
			@foreach($cats as $cat)
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="{{ $store->store_url('danh-muc/'.$cat->id) }}">{{ $cat->name }}</a></li>
                  @endforeach
</ul>               </div>
               <div class="banner-item orange">
                <i class="fa fa-car"></i>
                 <h4>Vận chuyển </h4>
                <p>Miễn phí Bán kính 200KM</p>
               </div>
               <div class="banner-item light-blue">
               <i class="fa fa-calculator"></i>
                 <h4>THANH TOÁN</h4>
                <p>Trực tiếp khi nhận hàng</p>
               </div>
               <div class="banner-item gray">
               <i class="fa fa-refresh"></i>
                 <h4>ĐỔI TRẢ HÀNG</h4>
                <p>Thời gian lên đến 30 ngày</p>
               </div>
               </div>