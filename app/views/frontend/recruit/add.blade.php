@extends('layouts.layout')
@section('title') Đăng tin rao vặt mới @stop
@section('banner')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><div class="glyphicon glyphicon-pencil"></div> Đăng tin tuyển dụng</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb  pull-right">
                        <li>
                            <a href="/" class="breadcrumb_home"><div class="glyphicon glyphicon-home"> Home</div></a>
                        </li>
                        <li>
                            <a href="/" class="breadcrumb_home">Tuyển Dụng</a>
                        </li>
                        <li class="active">
                            Đăng tin mới
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@stop
@section('content')
    <div id="content" class="site-content col-md-12" role="main">
        <div class="content">
        	<div class="col-sm-12">
			    <div class="panel panel-default">
			        <div class="panel-heading">
			            <h2 class="text-center" style="color:rgb(52, 73, 94);">Đăng Tin Tuyển Dụng</h2>
			        </div>
			        <div class="panel-body">
            <form action="{{ URL::to('tuyen-dung/dang-tin') }}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                {{ Form::token() }}
                <!-- @include('includes.notifications') -->
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Tên Cty:<span style="color:red;">*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('tencty', null, ['required','placeholder'=>"Nhập tên cty | Chú ý: Phải là tiếng Việt có dấu ..."]) }}
                        @if ($errors->has('tencty')) <p class="help-block" style="color:red">{{ $errors->first('tencty') }}</p> @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Địa chỉ:<span style="color:red;">*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('diachi', null, ['required','placeholder'=>"Địa chỉ..."]) }}
                        @if ($errors->has('diachi')) <p class="help-block" style="color:red">{{ $errors->first('diachi') }}</p> @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Lĩnh vực:<span style="color:red;">*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('linhvuc', null, ['required','placeholder'=>"Lĩnh vực ..."]) }}
                        @if ($errors->has('linhvuc')) <p class="help-block" style="color:red">{{ $errors->first('linhvuc') }}</p> @endif
                    </div>
                </div>	

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Vị trí tuyển dụng:<span style="color:red;">*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('vitrituyendung', null, ['required','placeholder'=>"Vị trí tuyển dụng ..."]) }}
                        @if ($errors->has('vitrituyendung')) <p class="help-block" style="color:red">{{ $errors->first('vitrituyendung') }}</p> @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Nơi làm việc:<span>*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('noilamviec', null, ['placeholder'=>"Nơi làm việc ..."]) }}
                        @if ($errors->has('noilamviec')) <p class="help-block" style="color:red">{{ $errors->first('noilamviec') }}</p> @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Mức lương:<span>*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('mucluong', null, ['placeholder'=>"Mức lương ..."]) }}
                        @if ($errors->has('mucluong')) <p class="help-block" style="color:red">{{ $errors->first('mucluong') }}</p> @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Hạn nộp hồ sơ:<span>*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('hannophoso', null, ['placeholder'=>"Hạn nộp hồ sơ ..."]) }}
                        @if ($errors->has('hannophoso')) <p class="help-block" style="color:red">{{ $errors->first('hannophoso') }}</p> @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Logo:<span>*</span></label>
                    <div class="col-sm-10 file-upload-btn field">
                   
                        {{ Form::file('logo') }}
                        
                        @if ($errors->has('logo')) <p class="help-block" style="color:red">{{ $errors->first('logo') }}</p> @endif
                        
                        {{-- //Upload Anh --}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Nội dung chi tiết:<span>*</span></label>
                    <div class="col-sm-10">
                        {{ Form::textarea('noidungchitiet', null, ['class'=>'form-control','id'=>'editor','class'=>'form-control',"placeholder"=>"Nhập nội dung chi tiết| Chú ý: Phải là tiếng Việt có dấu ..."]) }}
                        @if ($errors->has('noidungchitiet')) <p class="help-block" style="color:red">{{ $errors->first('noidungchitiet') }}</p> @endif
                    </div>
                </div>

                <div class="form-group lienhe">
                    <span><strong>Thông tin liên hệ</strong></span>
                </div>

                <div class="form-group">
                    <label for="ten" class="col-sm-2 control-label">Người đăng tin:<span style="color:red;">*</span></label>
                    <div class="col-sm-10 mag">
                        {{ Form::text('nguoidangtin',null,array('class'=>'form-control','required','placeholder'=>"Họ & Tên chịu trách nhiệm đăng tin")) }}
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Chức vụ:<span style="color:red;">*</span></label>
                    <div class="col-sm-10 mag">
                        {{ Form::text('chucvu',null,array('class'=>'form-control','required','placeholder'=>"Chức vụ")) }}
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Số điện thoại:<span style="color:red;">*</span></label>
                    <div class="col-sm-10 mag">
                        {{ Form::text('sodienthoai',null,array('class'=>'form-control','required','placeholder'=>"Số điện thoại")) }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email:</label>
                    <div class="col-sm-10 mag">
                        {{ Form::email('email',null,array('class'=>'form-control','placeholder'=>"Email")) }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2 text-center">
                    	<p>Thông tin chờ duyệt trong vòng 24h</p>
                        <button type="submit" class="btn btn-success">ĐĂNG NGAY</button>
                    </div>
                </div>
            </form>
        	</div>
	        </div>
	    </div>
        </div>
    </div>

@stop

@section('style')
	{{ HTML::style('assets/css/prettify.css') }}
	{{ HTML::style('assets/css/bootstrap-wysihtml5.css') }}
	{{ HTML::style('assets/css/froala_style.min.css') }}
	{{ HTML::style('assets/css/froala_editor.min.css') }}
	{{--{{ HTML::style('assets/css/file-upload.css') }}--}}
	<style type="text/css">
	.form-group.lienhe {
	  text-align: center;
	  font-size: 25px !important;
	  color: rgb(95, 176, 228);
	}
</style>
@stop

@section('script')
	{{ HTML::script('assets/js/wysihtml5-0.3.0.js') }}
	{{ HTML::script('assets/js/prettify.js') }}
	{{ HTML::script('assets/js/bootstrap-wysihtml5.js') }}
	{{ HTML::style('editor/css/froala_editor.min.css') }}
    {{ HTML::style('editor/css/froala_style.min.css') }}
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	{{--{{ HTML::script('assets/js/upload-file-jelly-min.js') }}--}}


      <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  {{ HTML::script('assets/js/froala_editor.min.js') }}
  <!--[if lt IE 9]>
    <script src="../js/froala_editor_ie8.min.js"></script>
  <![endif]-->
  <!-- {{ HTML::script('editor/js/plugins/tables.min.js') }}
  {{ HTML::script('editor/js/plugins/char_counter.min.js') }}
  {{ HTML::script('editor/js/plugins/lists.min.js') }}
  {{ HTML::script('editor/js/plugins/colors.min.js') }}
  {{ HTML::script('editor/js/plugins/font_family.min.js') }}
  {{ HTML::script('editor/js/plugins/font_size.min.js') }}
  {{ HTML::script('editor/js/plugins/block_styles.min.js') }}
  {{ HTML::script('editor/js/plugins/media_manager.min.js') }}
  {{ HTML::script('editor/js/plugins/video.min.js') }} -->

  <script>
  $(function() {
    $('#editor').editable({
      inlineMode: false
    })
  });
</script>
	<script>
		$('.textarea').wysihtml5();
	</script>
	{{ HTML::script('assets/js/froala_editor.min.js') }}
	{{ HTML::script('assets/js/froala_editor_ie8.min.j') }}
<script language="javascript">
        function AutoFormatDigit(obj) {
            var value = $(obj).val().replace(/,/g, '');
            $(obj).val(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        }
</script>

  {{ HTML::script('assets/js/file-upload.js') }}
     <!-- Include Font Awesome. -->

@stop