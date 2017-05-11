@extends('templates.public.template')
@section('main')
<?php 
$urlPublic = getenv('PUBLIC_TEMPLATE_URL');
 ?>
<div style="padding-top: 30px; "></div>

<div class="container-fluid">
    <div class="container ng-scope">
        <div class="row">
            <div class="col-md-12">

            <div class="card m-b-0" id="messages-main" style="box-shadow:0 0 40px 1px #c9cccd;">
            
                <div class="dropdown thongbao">
                  <h5 href="#" class="title-thong-bao">Thông báo</h5>
                  <ul class="imp-notify">
                    <li>
                        <div class="avatar-thong-bao"><img src="{{$urlPublic}}/img/tien.png" alt="Bluemoon Admin">
                        </div>
                        <div class="noi-dung-thong-bao">
                            <strong class="text-success">Tài khoản</strong>
                            <p>Tài khoản của bạn là <strong class="text-success">{{number_format($tien[0]['xu_gs'])}}</strong> xu. Tài khoản của bạn phải trên <strong class="text-danger">{{number_format($muctien[0]['gt'])}}</strong> mới có thể thực hiện đầy đủ các chức năng của gia sư.</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <?php
                    foreach ($arKetBans as $key => $arKetBan) {
                        $fullname_ph = $arKetBan['pfullname_ph'];
                        $id_ph = $arKetBan['pid_ph'];
                    ?>
                                    
                    <li>
                        <div class="avatar-thong-bao"><img src="/storage/files/add-user-icon.jpg" alt="Bluemoon Admin">
                        </div>
                        <div class="noi-dung-thong-bao">
                            <strong class="text-success">{{$fullname_ph}}</strong>
                            <p>Đã gửi lời đề nghị làm gia sư đến bạn</p>
                        </div>
                        <div class="pull-right">
                            <a href="{{URL::route('public.tuongtac.dongy', $id_ph)}}">Chấp nhận <i class="fa fa-check" aria-hidden="true"></i></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{URL::route('public.tuongtac.tuchoi', $id_ph)}}">Từ chối <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <?php
                        }
                    ?>

                    <?php
                    foreach ($arDaKetBans as $key => $arDaKetBan) {
                        $fullname_ph = $arDaKetBan['pfullname_ph'];
                        $id_ph = $arDaKetBan['pid_ph'];
                    ?>
                                    
                    <li>
                        <div class="avatar-thong-bao"><img src="/storage/files/add-user-icon.jpg" alt="Bluemoon Admin">
                        </div>
                        <div class="noi-dung-thong-bao">
                            <strong class="text-success">Đồng ý</strong>
                            <p>Bạn đã đồng ý lời đề nghị làm gia sư của <strong class="text-success">{{$fullname_ph}}</strong></p>
                        </div>
                        <div class="pull-right">
                            <a href="{{URL::route('public.tuongtac.message', $id_ph)}}">Gửi tin nhắn &nbsp;<i class="fa fa-times" aria-hidden="true"></i></a>
                            <a href="{{URL::route('public.tuongtac.tuchoi', $id_ph)}}">Hủy làm gia sư &nbsp;<i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <?php
                        }
                    ?>
                    
                    <li>
                        <div class="avatar-thong-bao"><img src="/storage/files/administrator.png" alt="Bluemoon Admin">
                        </div>
                        <div class="noi-dung-thong-bao">
                            <strong class="text-danger">Administrator</strong>
                            <p>Chào mừng bạn đến với website GiaSuOnline</p>
                        </div>
                    </li>
                    
                </ul>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
@endsection