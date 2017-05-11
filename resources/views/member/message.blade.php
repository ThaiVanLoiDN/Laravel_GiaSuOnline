@extends('templates.public.template')
@section('main')
<?php 
$urlPublic = getenv('PUBLIC_TEMPLATE_URL');
 ?>
  <?php
    $id_ph = $arPhuHuynh[0]['id_ph'];
    $username_ph = $arPhuHuynh[0]['username_ph'];
    $fullname_ph = $arPhuHuynh[0]['fullname_ph'];
    
    $id_gs = $arGiaSu[0]['id_gs'];
    $username_gs = $arGiaSu[0]['username_gs'];
    $fullname_gs = $arGiaSu[0]['fullname_gs'];
 ?>
<div style="padding-top: 30px; "></div>

<div class="container-fluid">
    <div class="container ng-scope">
        <div class="block-header ">
            
        </div>
        <div class="card m-b-0" id="messages-main" style="box-shadow:0 0 40px 1px #c9cccd;">
            <div class="ms-menu" style="overflow:scroll; overflow-x: hidden;" id="ms-scrollbar">
                <div class="ms-block">
                    <div class="ms-user">
                        <h5 class="q-title" align="center">Danh sách phụ huynh</h5> 
                    </div>
                </div>
                <hr/>
                <div class="listview lv-user m-t-20">
                    
                    <?php foreach ($arDaKetBans as $key => $arDaKetBan): 
                        $pfullname_ph1 = $arDaKetBan['pfullname_ph'];
                        $pid_ph1 = $arDaKetBan['pid_ph'];
                        $active="";
                        if($pid_ph1 == $id_ph){
                            $active = "active";
                        }
                    ?>
                    <div class="lv-item media {{$active}}">
                        <div class="lv-avatar pull-left"> <img src="{{$urlPublic}}/img/noAvatar.png" alt=""> </div>
                        <div class="media-body">
                            <div class="lv-title"><h5><a href="{{route('public.tuongtac.message', $pid_ph1)}}">{{$pfullname_ph1}}</a></h5> </div>
                        </div>
                    </div>

                    <?php endforeach ?>

                </div>
            </div>
            <div class="ms-body">
                <div class="listview lv-message">
                    <div class="lv-header-alt clearfix">
                        <div id="ms-menu-trigger">
                            <div class="line-wrap">
                                <div class="line top"></div>
                                <div class="line center"></div>
                                <div class="line bottom"></div>
                            </div>
                        </div>
                        <div class="lvh-label hidden-xs">
                            <div class="lv-avatar pull-left"> <img src="{{$urlPublic}}/img/noAvatar.png" alt=""> </div><span class="c-black">{{$fullname_ph}}</span>
                        </div>
                    </div>
                    <div class="lv-body" id="noidungtinnhan" style="overflow:scroll; overflow-x: hidden; height:520px;">

                        <?php 
                            foreach ($arChats as $key => $arChat) {
                                $noidung_chat = $arChat['noidung_chat'];
                                $doituong = $arChat['doituong'];
                                $img_gs = $arChat['img_gs'];
                                $time_chat = $arChat['time_chat'];

                                $time_chat = date('H:i:s d/m/y', $time_chat);

                                if($img_gs == ""){
                                    $img_gs = "no-avatar.png";
                                }
                            
                                if($doituong == 1){
                         ?>
                        <div class="lv-item media">
                            <div class="lv-avatar pull-left"> <img src="/storage/files/{{$img_gs}}" alt=""> </div>
                            <div class="media-body">
                                <div class="ms-item"> {{$noidung_chat}}</div>
                                <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; {{$time_chat}}</small> </div>
                        </div>
                        <?php 
                                } else{
                            
                         ?>
                         <div class="lv-item media right">
                            <div class="lv-avatar pull-right"> <img src="{{$urlPublic}}/img/noAvatar.png" alt=""> </div>
                            <div class="media-body">
                                <div class="ms-item"> {{$noidung_chat}}</div>
                                <small class="ms-date"><span class="glyphicon glyphicon-time"></span>&nbsp; {{$time_chat}}</small> </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                        
                    </div>
                    <div class="clearfix"></div>
                    <div class="lv-footer ms-reply">
                    <form class="gui-tin-nhan" id="sendMessage" method="post" action="javascript:void(0)">
                        <textarea rows="10" placeholder="Nhập tin nhắn..." class="noidung_chat" name="noidung_chat"></textarea>
                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                        <button class=""><span class="glyphicon glyphicon-send"></span>
                        </button>
                    </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
    $(document).on('submit','#sendMessage', function(){
        var noidung_chat = $('.noidung_chat').val();
        var id_ph = {{$id_ph}};

        $.ajax({
            url: "{{route('public.tuongtac.sendmessage')}}",
            type: 'GET',
            cache: false,
            data: {
                anoidung_chat: noidung_chat,
                aid_ph : id_ph
            },
            success: function(data){
                $('#noidungtinnhan').html(data);
                $('#sendMessage').trigger("reset");

                var d = $('#noidungtinnhan');
                d.scrollTop(d.prop("scrollHeight"));
            },
            error: function (){
                alert('lỗi');
            }
        });     
    });
});

$.ajaxSetup({cache:false});

setInterval(function() {
    $('#noidungtinnhan').load("{{route('public.tuongtac.loadmessage')}}");
    var d = $('#noidungtinnhan');
    d.scrollTop(d.prop("scrollHeight"));
}, 3000);


var d = $('#noidungtinnhan');
d.scrollTop(d.prop("scrollHeight"));

</script>
@endsection