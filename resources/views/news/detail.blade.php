@extends('templates.public.template')
@section('main')

<?php 
$Website = getenv('APP_URL');
 ?>

<?php foreach ($arDetails as $key => $arDetail): 
    $id_post = $arDetail['id_post'];
    $tenpost = $arDetail['tenpost'];
    $chitiet_post = $arDetail['chitiet_post'];
    $time_post = $arDetail['time_post'];
    $luotdoc = $arDetail['luotdoc'];
    $ngay = date("d-m-Y", $time_post);
    $gio = date("h:i:s", $time_post);

    $slugtrue = str_slug($tenpost);
 ?> 
<?php endforeach ?>
<div class="container-fluid white-bg">
      <div class="container" style="padding-bottom: 20px;">
        <div class="row">
          <div class="col-sm-8 noidungbaiviet">
            <h1 class="tieude">{{$tenpost}}</h1>
            <p class="thoigian">Ngày {{$ngay}}, lúc {{$gio}}</p>
            <hr />
            
            <?php echo $chitiet_post ?>

            <div class="tabpane-container">
            <h2>Bình luận</h2>
                <ul class="nav">
                  <li class="active col-lg-6 col-md-6 col-sm-6 col-xs-6"><a  href="#1a" data-toggle="tab">Website</a></li>
                  <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><a href="#2a" data-toggle="tab">Facebook</a></li>
                </ul>
                <div class="tab-content  col-xs-12 clearfix">
                  <div class="tab-pane active" id="1a">
                    <div class="khu-vuc-binh-luan">
                    <div class="hien-thi-comment">
                      
                      <?php

                      foreach ($arComments as $key => $arComment) {
                        $hoten_cmt = $arComment['hoten_cmt'];
                        $time_cmt = $arComment['time_cmt'];
                        $noidung_cmt = $arComment['noidung_cmt'];

                        $gio_cmt = date('h:i:s', $arComment['time_cmt']);
                        $ngay_cmt = date('d-m-Y', $arComment['time_cmt']);

                        ?>

                        <div>
                            <h5><?php echo $hoten_cmt ?> <span> lúc <?php echo $gio_cmt ?> ngày <?php echo $ngay_cmt ?></span></h5> 
                            <p class="text-grey text-justify"><?php echo $noidung_cmt ?></p>
                        </div>

                        <?php
                    }
                      ?>
                    </div>   
                    <div class="pagination-wrap"> 
                      <?php echo $arComments->links(); ?>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                    
                    <form id="comment" method="post" class="form-horizontal" action="javascript:void(0)">
                      <div class="form-group">
                        <label class="col-sm-3 control-label" >Họ và tên</label>
                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                        <div class="col-sm-9">
                          <input type="text" class="form-control hoten_cmt"  name="fullname" placeholder="Nhập họ và tên" />
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-sm-3 control-label" >Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control email_cmt"  name="emailcmt" placeholder="Nhập email" />
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label" >Nội dung bình luận</label>
                        <div class="col-sm-9">
                          <textarea name="binhluanbv" class="form-control noidung_cmt" rows="5"></textarea>
                        </div>
                      </div>

                      <div class="form-group text-center">
                        <div class="col-sm-12"  style="padding-top: 10px;">
                          <button type="submit" class="btn btn-primary" name="signup1" value="Bình luận">Bình luận</button>
                        </div>
                      </div>

                    </form>

                     
                  </div>
                
                  
                    <div class="tab-pane" id="2a">
                      <!--Chèn comment Facebook-->
                      <script>
                        window.fbAsyncInit = function() {
                        FB.init({
                          appId      : '1768827193344936',
                          xfbml      : true,
                          version    : 'v2.5'
                        });
                        };

                        (function(d, s, id){
                         var js, fjs = d.getElementsByTagName(s)[0];
                         if (d.getElementById(id)) {return;}
                         js = d.createElement(s); js.id = id;
                         js.src = "//connect.facebook.net/en_US/sdk.js";
                         fjs.parentNode.insertBefore(js, fjs);
                         }(document, 'script', 'facebook-jssdk'));
                      </script>
                      <div class="fb-comments" data-href="<?php echo $Website.$_SERVER['REQUEST_URI']; ?>" data-width="100%" data-numposts="5"></div>
                    </div>                    
                  </div>
              </div>
              <div class="clearfix">
              </div>
          </div>

          <div class="col-sm-4 right-bar">
            <div class="col-sm-12">
              <h4 class="cat-right-bar">Bài viết</h4>
              <div class="tabpane-container">
              <ul class="nav">
                <li class="active col-lg-6 col-md-6 col-sm-6 col-xs-6"><a  href="#moinhat" data-toggle="tab">Mới nhất</a>
                </li>
                <li class="  col-lg-6 col-md-6 col-sm-6 col-xs-6"><a href="#hotnhat" data-toggle="tab">Hot nhất</a>
                </li>
              </ul>

              <div class="tab-content  col-xs-12 clearfix">
                <div class="tab-pane active" id="moinhat">
                  <ul class="newpost">
                    <?php foreach ($arNewsMoi as $key => $arMoi): 
                        $id_moi = $arMoi['id_post'];
                        $ten_moi = $arMoi['tenpost'];
                        $time_moi = $arMoi['time_post'];
                        $time_moi = date("d-m-Y", $time_moi);

                        $slugmoi = str_slug($ten_moi);
                          $urlmoi = route('public.news.detail', ['slug' => $slugmoi, 'id' => $id_moi]);
                    ?>
                      <li>
                        <h5><a href="{{$urlmoi}}" title="{{$ten_moi}}">{{$ten_moi}}</a></h5>
                        <span>{{$time_moi}}</span>
                      </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <div class="tab-pane " id="hotnhat">
                  <ul class="newpost">
                    <?php foreach ($arNewsHot as $key => $arHot): 
                        $id_hot = $arHot['id_post'];
                        $ten_hot = $arHot['tenpost'];
                        $time_hot = $arHot['time_post'];
                        $time_hot = date("d-m-Y", $time_hot);

                        $slugHot = str_slug($ten_hot);
                          $urlHot = route('public.news.detail', ['slug' => $slugHot, 'id' => $id_hot]);
                    ?>
                      <li>
                        <h5><a href="{{$urlHot}}" title="{{$ten_hot}}">{{$ten_hot}}</a></h5>
                        <span>{{$time_hot}}</span>
                      </li>
                    <?php endforeach ?>
                    </ul>
                </div>
              </div>
              <div class="clearfix"></div>
            </div> <!-- tab-content -->
            </div>
            <div class="col-sm-12">
              <h4 class="cat-right-bar">Chuyên mục</h4>
                <div class="tabpane-container">
                <div class="tab-content chuyen-muc col-xs-12">
                    <ul class="chuyenmuc">
                      <?php foreach ($arCats as $key => $arCat):                         

                          $tencat = $arCat['tencat'];
                          $id_cat = $arCat['id_cat'];

                          $slugs = str_slug($tencat);
                          
                          $urlCat = route('public.news.cat', ['slug' => $slugs, 'id' => $id_cat]);

                      ?>
                        
                      
                      <li>
                        <h5><a href="{{$urlCat}}" title="{{$tencat}}">{{$tencat}}</a></h5>
                      </li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="clearfix" style="padding-bottom: 20px;">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>  

  <script type="text/javascript">
$(function(){
  $(document).on('submit','#comment', function(){
    var hoten_cmt = $('.hoten_cmt').val();
    var email_cmt = $('.email_cmt').val();
    var noidung_cmt = $('.noidung_cmt').val();
    var id_bv = {{$id_post}};

    $.ajax({
      url: "{{route('public.news.getComment')}}",
      type: 'GET',
      cache: false,
      data: {
          
        ahoten_cmt: hoten_cmt,
        aemail_cmt: email_cmt,
        anoidung_cmt: noidung_cmt,
        aid_bv: id_bv
      },
      success: function(data){
        $('.hien-thi-comment').html(data);
        $('#comment').trigger("reset");

      },
      error: function (){
        alert('lỗi');
      }
    });   
  });
});
</script>
<script type="text/javascript">
    window.history.pushState('page2', 'Title', "{{route('public.news.detail', ['slug' => $slugtrue, 'id' => $id_post])}}");
</script>

@endsection