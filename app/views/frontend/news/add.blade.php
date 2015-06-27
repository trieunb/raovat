@extends('layouts.layout')
@section('title') Đăng tin rao vặt mới @stop
@section('banner')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><div class="glyphicon glyphicon-pencil"></div> Đăng tin rao vặt</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb  pull-right">
                        <li>
                            <a href="/" class="breadcrumb_home"><div class="glyphicon glyphicon-home"> Home</div></a>
                        </li>
                        <li>
                            <a href="/danh-muc" class="breadcrumb_home">Rao vặt</a>
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
                    <div class="panel-body">
            <form action="{{ URL::to('rao-vat/dang-tin') }}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                <!-- @include('includes.notifications') -->
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Tên tiêu đề:</label>
                    <div class="col-sm-10">
                        {{ Form::text('tieude', null, ['required','placeholder'=>"Chú ý: Một bài viết chỉ đăng 1 sản phẩm, dùng tiếng Việt có dấu"]) }}
                        @if ($errors->has('tieude')) <p class="help-block" style="color:red">{{ $errors->first('tieude') }}</p> @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Loại Tin:</label>
                    <div class="col-sm-10">
                        <p class="pull-left">
                        {{ Form::radio('loaitin', 0, ['required']) }} Cần mua
                        {{ Form::radio('loaitin', 1, ['required']) }} Cần bán
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Danh mục:</label>
                    <div class="col-sm-10">
                        {{ Form::select('cat_id', Category::lists('tendanhmuc', 'id') ) }}
                        @if ($errors->has('cat_id')) <p class="help-block" style="color:red">{{ $errors->first('cat_id') }}</p> @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Nội dung chi tiết:</label>
                    <div class="col-sm-10">
                        {{ Form::textarea('noidung', null, ['required', 'class'=>'form-control','id'=>'editor','class'=>'form-control',"placeholder"=>"Nhập nội dung chi tiết về sản phẩm/dịch vụ | Chú ý: Phải là tiếng Việt có dấu ..."]) }}
                        @if ($errors->has('noidung')) <p class="help-block" style="color:red">{{ $errors->first('noidung') }}</p> @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Giá:</label>
                    <div class="col-sm-4">
                        {{ Form::text("gia",Input::old("gia"),array("placeholder"=>"Nhập giá ...",
                                                                       "autocomplete"=>"off",
                                                                        "onkeyup"=>"AutoFormatDigit(this)"
                                                                        )) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Hình Ảnh:</label>
                    <div class="col-sm-10 file-upload-btn field">
                    <div class="image-group">
                        {{-- Upload Anh --}}
                        <div class="col-sm-5">
                            <label class="file-upload">
                                {{ Form::file('image1') }}
                            </label>
                            @if ($errors->has('image1')) <p class="help-block" style="color:red">{{ $errors->first('image1') }}</p> @endif
                        </div>
                        <div class="col-sm-5">
                            <label class="file-upload">
                                {{ Form::file('image2') }}
                            </label>
                            @if ($errors->has('image2')) <p class="help-block" style="color:red">{{ $errors->first('image2') }}</p> @endif
                        </div>
                        <div class="col-sm-5">
                            <label class="file-upload">
                                {{ Form::file('image3') }}
                            </label>
                            @if ($errors->has('image3')) <p class="help-block" style="color:red">{{ $errors->first('image3') }}</p> @endif
                        </div>
                        <div class="col-sm-5">
                            <label class="file-upload">
                                {{ Form::file('image4') }}
                            </label>
                            @if ($errors->has('image4')) <p class="help-block" style="color:red">{{ $errors->first('image4') }}</p> @endif
                        </div>
                        <div class="col-sm-5">
                            <label class="file-upload">
                                {{ Form::file('image5') }}
                            </label>
                            @if ($errors->has('image5')) <p class="help-block" style="color:red">{{ $errors->first('image5') }}</p> @endif
                        </div>
                        <div class="col-sm-5">
                            <label class="file-upload">
                                {{ Form::file('image6') }}
                            </label>
                            @if ($errors->has('image6')) <p class="help-block" style="color:red">{{ $errors->first('image6') }}</p> @endif
                        </div>

                    </div>
                        {{-- //Upload Anh --}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Quy Trình Vận Chuyển, giao và nhận:</label>
                    <div class="col-sm-10">
                        {{ Form::textarea('quytrinhvanchuyen', null, ['required', 'rows'=>'3', 'class'=>'form-control',"placeholder"=>"Cách thức và quy trình giao nhận sản phẩm/dịch vụ ..."]) }}
                    </div>
                </div>
                <div class="form-group lienhe">
                    <h3 class="center"><b>Thông tin liên hệ</b></h3>
                </div>

                <div class="form-group">
                    <label for="ten" class="col-sm-2 control-label">Tên:</label>
                    <div class="col-sm-10 mag">
                        {{ Form::text('name',$thongtinlienhe->full_name,array('class'=>'form-control')) }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email:</label>
                    <div class="col-sm-10 mag">
                        {{ Form::email('email',$thongtinlienhe->email,array('class'=>'form-control')) }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Số điện thoại:</label>
                    <div class="col-sm-10 mag">
                        {{ Form::text('phone',$thongtinlienhe->phone,array('class'=>'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Địa Chỉ:</label>
                    <div class="col-sm-10 mag">
                        {{ Form::text('address',$thongtinlienhe->address,array('class'=>'form-control')) }}
                    </div>
                </div>
                <div class="form-group center">
                    <button type="submit" class="btn btn-success">ĐĂNG NGAY</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        </div>
    </div>

@stop

@section('style')
    {{ HTML::style('redactor/redactor.css') }}
@stop

@section('script')
    {{ HTML::script('redactor/jquery.js') }}
    {{ HTML::script('redactor/redactor.js') }}

    <script language="javascript">
        $(document).ready(function(){
            $("#editor").redactor({
                focus:true,

            });
        })
    </script>

    <script language="javascript">
        function AutoFormatDigit(obj) {
            var value = $(obj).val().replace(/,/g, '');
            $(obj).val(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        }
</script>

@stop