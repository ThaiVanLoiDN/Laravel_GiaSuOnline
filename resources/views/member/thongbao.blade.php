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
                            <p>Tài khoản của bạn là <strong class="text-success">{{number_format($tien[0]['xu_ph'])}}</strong> xu. Tài khoản của bạn phải trên <strong class="text-danger">{{number_format($muctien[0]['gt'])}}</strong> mới có thể thực hiện đầy đủ các chức năng của gia sư.</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <?php
                    foreach ($arKetBans as $key => $arKetBan) {
                        $fullname_gs = $arKetBan['gfullname_gs'];
                        $id_gs = $arKetBan['gid_gs'];
                        $username_gs = $arKetBan['gusername_gs'];
                    ?>
                                    
                    <li>
                        <div class="avatar-thong-bao"><img src="/storage/files/add-user-icon.jpg" alt="Bluemoon Admin">
                        </div>
                        <div class="noi-dung-thong-bao">
                            <strong class="text-success"><a href="{{route('public.member.profile', $username_gs)}}" title="{{$fullname_gs}}">{{$fullname_gs}}</a></strong>
                            <p>Bạn đang chờ lời chấp nhận của gia sư này</p>
                        </div>
                        <div class="pull-right">
                            <a href="{{URL::route('public.tuongtac.huy', $id_gs)}}">Hủy yêu cầu <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <?php
                        }
                    ?>

                    <?php
                    foreach ($arDaKetBans as $key => $arDaKetBan) {
                        $fullname_gs = $arDaKetBan['gfullname_gs'];
                        $id_gs = $arDaKetBan['gid_gs'];
                        $username_gs = $arDaKetBan['gusername_gs'];
                    ?>
                                    
                    <li>
                        <div class="avatar-thong-bao"><img src="/storage/files/add-user-icon.jpg" alt="Bluemoon Admin">
                        </div>
                        <div class="noi-dung-thong-bao">
                            <strong class="text-success">Đồng ý</strong>
                            <p>Gia sư <a href="{{route('public.member.profile', $username_gs)}}" title="{{$fullname_gs}}"><strong class="text-success">{{$fullname_gs}}</strong></a> đã đồng ý yêu cầu của bạn</p>
                        </div>
                        <div class="pull-right">
                            <a href="{{URL::route('public.tuongtac.tinnhan', $id_gs)}}">Gửi tin nhắn &nbsp;<i class="fa fa-times" aria-hidden="true"></i></a>
                            <a href="{{URL::route('public.tuongtac.huy', $id_gs)}}">Hủy hợp tác &nbsp;<i class="fa fa-times" aria-hidden="true"></i></a>
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