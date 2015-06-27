@extends('layouts.layout')
@section('title') Đăng tin rao vặt mới @stop

@section('content')
    <div id="content" class="site-content col-md-12" role="main">
        <div class="content">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{ URL::action('UserController@postEditTuyenDung',$tuyendung->id) }}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                            {{ Form::token() }}
                            <!-- @include('includes.notifications') -->
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Tên Cty:<span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    {{ Form::text('tencty',$tuyendung->tencty, ['required','placeholder'=>"Nhập tên cty | Chú ý: Phải là tiếng Việt có dấu ..."]) }}
                                    @if ($errors->has('tencty')) <p class="help-block" style="color:red">{{ $errors->first('tencty') }}</p> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Địa chỉ:<span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    {{ Form::text('diachi',$tuyendung->diachi, ['required','placeholder'=>"Địa chỉ..."]) }}
                                    @if ($errors->has('diachi')) <p class="help-block" style="color:red">{{ $errors->first('diachi') }}</p> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Lĩnh vực:<span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    {{ Form::text('linhvuc',$tuyendung->linhvuc, ['required','placeholder'=>"Lĩnh vực ..."]) }}
                                    @if ($errors->has('linhvuc')) <p class="help-block" style="color:red">{{ $errors->first('linhvuc') }}</p> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Vị trí tuyển dụng:<span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    {{ Form::text('vitrituyendung',$tuyendung->vitrituyendung, ['required','placeholder'=>"Vị trí tuyển dụng ..."]) }}
                                    @if ($errors->has('vitrituyendung')) <p class="help-block" style="color:red">{{ $errors->first('vitrituyendung') }}</p> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Nơi làm việc:<span>*</span></label>
                                <div class="col-sm-10">
                                    {{ Form::text('noilamviec',$tuyendung->noilamviec, ['placeholder'=>"Nơi làm việc ..."]) }}
                                    @if ($errors->has('noilamviec')) <p class="help-block" style="color:red">{{ $errors->first('noilamviec') }}</p> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Mức lương:<span>*</span></label>
                                <div class="col-sm-10">
                                    {{ Form::text('mucluong',$tuyendung->mucluong, ['placeholder'=>"Mức lương ..."]) }}
                                    @if ($errors->has('mucluong')) <p class="help-block" style="color:red">{{ $errors->first('mucluong') }}</p> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Hạn nộp hồ sơ:<span>*</span></label>
                                <div class="col-sm-10">
                                    {{ Form::text('hannophoso',$tuyendung->hannophoso, ['placeholder'=>"Hạn nộp hồ sơ ..."]) }}
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
                                    {{ Form::textarea('noidungchitiet',$tuyendung->noidungchitiet, ['id'=>'editor']) }}
                                    @if ($errors->has('noidungchitiet')) <p class="help-block" style="color:red">{{ $errors->first('noidungchitiet') }}</p> @endif
                                </div>
                            </div>

                            <div class="form-group lienhe center">
                                <h3><b>Thông tin người đăng</b></h3>
                                <b>Thông báo:</b> <i>Để phục vụ cho chất lượng bài đăng, vui lòng điền đúng thông tin (Thông tin này sẽ không xuất hiện khi xem)</i>
                            </div>

                            <div class="form-group">
                                <label for="ten" class="col-sm-2 control-label">Họ & Tên:<span style="color:red;">*</span></label>
                                <div class="col-sm-10 mag">
                                    {{ Form::text('nguoidangtin',$tuyendung->nguoidangtin,array('class'=>'form-control','required','placeholder'=>"Người có trách nhiệm đăng tin này ...")) }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Chức vụ:<span style="color:red;">*</span></label>
                                <div class="col-sm-10 mag">
                                    {{ Form::text('chucvu',$tuyendung->chucvu,array('class'=>'form-control','required','placeholder'=>"Chức vụ ...")) }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Số điện thoại:<span style="color:red;">*</span></label>
                                <div class="col-sm-10 mag">
                                    {{ Form::text('sodienthoai',$tuyendung->sodienthoai,array('class'=>'form-control','required','placeholder'=>"Số điện thoại liên hệ ...")) }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-10 mag">
                                    {{ Form::email('email',$tuyendung->email,array('class'=>'form-control','placeholder'=>"Email ...")) }}
                                </div>
                            </div>

                            <div class="form-group center">
                                    <b><i>(Thông tin sẽ được duyệt trong vòng 24h)</i></b>
                                <br>
                                    <button type="submit" class="btn btn-success">Edit</button>
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

@stop