@extends('layouts.storelayout')
@section('primary')
<section>
         <div class="center clear">
         
  <div class="kenshop-main"><nav class="woocommerce-breadcrumb"><a href="{{ $store->store_url() }}">Trang chủ</a> » Liên hệ</nav>
    
      <h2 class="title"><span>Liên hệ với chúng tôi</span></h2>
      <div class="contact" style="width: 50%;">
       <h3>Nhập thông tin liên hệ</h3>
      {{ Form::open(['url'=>$store->store_url('lien-he/thanks'), 'method'=>'POST', 'class'=>'checkout woocommerce-checkout']) }}
      <p class="form-row form-row-wide" id="">
        <label for="name" class="">Tên của bạn</label>
        {{ Form::text('name', null, ['class'=>'input-text']) }}
      </p>
      <p class="form-row form-row-wide" id="">
        <label for="email" class="">Email</label>
        {{ Form::text('email', null, ['class'=>'input-text']) }}
      </p>
      <p class="form-row form-row-wide" id="">
        <label for="subject" class="">Tiêu đề</label>
        {{ Form::text('subject', null, ['class'=>'input-text']) }}
      </p>
      <p class="form-row form-row-wide" id="">
        <label for="messsage" class="">Nội dung</label>
        {{ Form::textarea('messsage', null, ['class'=>'input-text', 'rows'=>10, 'style'=>'height: auto']) }}
      </p>
      <input type="submit" class="button alt" name="" id="" value="Gửi liên hệ" data-value="Gửi liên hệ">
      {{ Form::close() }}
      </div>
<div class="clear"></div>  
  </div>
@include('includes.store_sidebar')
<div class="clear"></div>  
</div>

</section>
@stop