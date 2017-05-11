@extends('templates.public.template')
@section('main')

<?php 
$urlPublic = getenv('PUBLIC_TEMPLATE_URL');
 ?>

<?php 
if (Session::has('msg'))
{
?>
  <div class="alert alert-success"><p><strong><?php echo Session::get('msg'); ?></strong></p></div>
<?php
}
if (Session::has('msgdanger'))
{
?>
  <div class="alert alert-danger"><p><strong><?php echo Session::get('msgdanger'); ?></strong></p></div>
<?php
}
 ?>
 

<section id="slider" class="slider">
  <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner" role="listbox">
      <?php foreach ($arSlides as $key => $arSlide): 
        $id_sl = $arSlide['id_sl'];
        $img_sl = $arSlide['img_sl'];
        $link_sl = $arSlide['link_sl'];
        $mota_sl = $arSlide['mota_sl'];
        $tensl = $arSlide['tensl'];
        if($img_sl == "") $img_sl = 'slide-mac-dinh.png';
      ?>

      <div class="item <?php if ($key == 0) echo 'active' ?> single-slider">
        <img src="/storage/files/{{$img_sl}}" alt="">
        <div class="carousel-caption">
          <h1 data-animation="animated bounceInLeft"><a href="{{$link_sl}}">{{$tensl}}</a></h1>
          <p data-animation="">{{$mota_sl}}</p>
        </div>
      </div>
      <?php endforeach ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>
  </div>
</section> <!-- slider --> 

<!---Giới thiệu web-->
<section id="invest-future"  class="brown-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="about-content text-center">
              <h1 style="font-weight: bold ">GIỚI THIỆU WEBSITE</h1>
              <?php echo $arData['GioiThieus'][0]['gt']; ?>
            </div>
          </div>
        </div>
      </div> <!-- container end -->
    </section>
<!-- Tìm kiếm gia sư -->
<?php 
    if (!Session::has('arLoginGiaSu')){
?>
<section class="white-bg">
  <div class="container">
    <div class="row">
      <h3 class="section-main">TÌM KIẾM GIA SƯ</h3>
    </div> 
    <div class="row">
      <div class="text-center tim-kiem">
        <form class="form-inline" action="{{route('public.search.ketquagiasu')}}" method="post" novalidate="novalidate" >
          <div class="form-group">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
           <label for="sel1">Quận/Huyện: </label>
            <select class="form-control select2" name="id_quan">
                <?php foreach ($arQuanHuyens as $key => $arQuanHuyen): 
                    $id_quan = $arQuanHuyen['id_quan'];
                    $tenquan = $arQuanHuyen['tenquan'];
                ?>
                <option value="{{$id_quan}}">{{$tenquan}}</option>
               <?php endforeach ?>
            </select>
          </div>
         <div class="form-group">
           <label for="sel1">Lớp: </label>
            <select class="form-control select2" name="id_lop">
              <?php foreach ($arLopHocs as $key => $arLopHoc): 
                    $id_lop = $arLopHoc['id_lop'];
                    $tenlop = $arLopHoc['tenlop'];
                ?>
                <option value="{{$id_lop}}">{{$tenlop}}</option>
               <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
           <label for="sel1">Môn: </label>
            <select class="form-control select2" name="id_mon">
              <?php foreach ($arMonHocs as $key => $arMonHoc): 
                    $id_mon = $arMonHoc['id_mon'];
                    $tenmon = $arMonHoc['tenmon'];
                ?>
              <option value="{{$id_mon}}">{{$tenmon}}</option>
              <?php endforeach ?>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Tìm kiếm</button>
        </form>
      </div>
    </div> <!-- end .row -->
  <!-- Kết thúc tìm kiếm -->
      <div class="row text-center ket-qua">

        <?php foreach ($arGiaSuUuTus as $key => $arGiaSuUuTu): 
          $username_gs = $arGiaSuUuTu['username_gs'];
          $fullname_gs = $arGiaSuUuTu['fullname_gs'];
          $img_gs = $arGiaSuUuTu['img_gs'];
          $diem = $arGiaSuUuTu['diem'];

          if($img_gs == ""){
            $img_gs = "no-avatar.png";
          }

        ?>
        <div class="col-md-3">
          <a href="{{route('public.member.profile', $username_gs)}}">
            <img src="/storage/files/{{$img_gs}}" class="img-responsive img-center">
          </a>
          <h3 class="text-center"><a href="{{route('public.member.profile', $username_gs)}}">{{$fullname_gs}}</a></h3>
          <h4 class="text-center">
            <img src="{{$urlPublic}}/img/{{$diem}}star.png" class="img-responsive img-center" width="150px">
          </h4>
        </div>
        
        <?php endforeach ?>
      </div>
    </div>
 </section> 
<?php
  }
?>
<!-- Bài viết -->
<section id="portfolio" class="grey-bg" >
  <div class="container">
    <div class="row">
      <h3 class="section-main"><a href="/bai-viet.html">CÁC BÀI VIẾT MỚI NHẤT</a></h3>
    </div>
      <ul class="portfolio-filter categories-filter text-center">
          <li><a href="javascript:void(0)" data-filter="*" class="categories active">Tất cả</a></li>
          <?php 
            foreach ($arNewsAllCs as $key => $arNewsAllC): 
              if (isset($arNewsAllC[0])) {
                 $tencat = $arNewsAllC[0]['tencat'];
        
          ?>
          <li><a href="javascript:void(0)" data-filter=".cat{{$key}}" class="categories">{{$tencat}}</a></li>

          <?php 
              }
            endforeach 
          ?>
      </ul>

      <div class="rows portfolio-grid gallery-popup">
          <!-- Portfolio Item -->
          <!-- End Portfolio Item -->
          <?php 
          foreach ($arNewsAllCs as $key => $arNewsAllC): 
              if (isset($arNewsAllC[0])) {
                $tencat = $arNewsAllC[0]['tencat'];

                foreach ($arNewsAllC as $key2 => $arNews): 
                        $id_post = $arNews['id_post'];
                        $tenpost = $arNews['tenpost'];
                        $mota_post = $arNews['mota_post'];
                        $img_post = $arNews['img_post'];
                        if($img_post == ""){
                            $img_post = "noimage.jpg";
                        }

                        $slug = str_slug($tenpost);

                        $urlpost = route('public.news.detail', ['slug' => $slug, 'id' => $id_post]);
           ?>

           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item graphics cat{{$key}} web">
                        <div class="portfolio-box">
                            <a class="porfolio-popup gallery-popup-link" href="{{$urlpost}}">
                                <div class="portfolio-image-wrap">
                                    <img class="img-responsive" src="/storage/files/{{$img_post}}" alt="{{$tenpost}}" />
                                </div>
                                <div class="portfolio-caption-mask text-center">
                                   <h5 class="alt-title">{{$tenpost}}</h5>
                                    <p>{{$tencat}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
          
                    <?php 
                    endforeach;
              }
            endforeach 
          ?>
          
      </div>
  </div>
</section>

<section id="counter" class="brown-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="counter-group text-center">
          <div class="counter-icon">
            <i class="fa fa-eye" aria-hidden="true"></i>
            <h6>Lượt view</h6>
          </div>
          <div class="counter-content">
              <h1 class="counter-title counter-num">{{$arData['Views'][0]['gt']}}</h1>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="counter-group text-center">
            <div class="counter-icon">
              <i class="fa fa-graduation-cap" aria-hidden="true"></i>
              <h6>Số gia sư</h6>
            </div>
            <div class="counter-content">
                <h1 class="counter-title counter-num">{{$arData['countGs']}}</h1>
            </div>
        </div>
      </div>

     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="counter-group text-center">
            <div class="counter-icon">
              <i class="fa fa-user" aria-hidden="true"></i>
              <h6>Số phụ huynh</h6>
            </div>
            <div class="counter-content">
                <h1 class="counter-title counter-num">{{$arData['countPh']}}</h1>
            </div>
        </div>
     </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="counter-group text-center">
            <div class="counter-icon">
             <i class="fa fa-file-o" aria-hidden="true"></i>
              <h6>Số bài viết</h6>
            </div>
            <div class="counter-content">
                <h1 class="counter-title counter-num">{{$arData['countPost']}}</h1>
            </div>
        </div>
      </div>   
    </div>
  </div>
</section>
<section class="white-bg">
  <div class="container">
    <div class="row ">
      <?php foreach ($arQuangCaos as $key => $arQuangCao): 
        $id_qc = $arQuangCao['id_qc'];
        $tenqc = $arQuangCao['tenqc'];
        $img_qc = $arQuangCao['img_qc'];
        $link_qc = $arQuangCao['link_qc'];
      ?>
      <div class="col-md-3 col-sm-6">
        <a href="{{$link_qc}}" target="_blank">
          <img src="/storage/files/{{$img_qc}}" class="img-responsive center-block" alt="{{$tenqc}}" />
        </a>
      </div>
      <?php endforeach ?>
    </div>
    
  </div>
</section>
<?php 
    if (!Session::has('arLoginGiaSu') && !Session::has('arLoginPhuHuynh')){
?>
<div id="pop-up" class="navbar-fixed-bottom container-fluid" style="display: block;">
    <div class="close-popup-signup">
        <a href="javascript:void(0)" class="andi">x</a>
    </div>
    <div class="l-popup-register container">
        <h3>ĐĂNG NHẬP ĐỂ SỬ DỤNG CÁC CHỨC NĂNG CỦA GIA SƯ VÀ PHỤ HUYNH</h3>
        <p class="l-popup-login">Bạn cần đăng nhập để có thể tương tác giữa gia sư và phụ huynh như hợp tác với nhau, liên hệ qua tin nhắn và các chức năng khác nữa...</p>
        <p class="l-popup-login">
          <button data-toggle="modal" data-target="#dangnhap" class="phuhuynh">[Phụ huynh]</button>
          <button data-toggle="modal" data-target="#login" class="giasu">[Gia sư]</button>
        </p>

        <p class="l-popup-signup">Chưa có tài khoản? Đăng ký ngay
          <a href="{{route('public.member.dangky')}}">[Phụ huynh]</a>
          <a href="{{route('public.member.signup')}}" class="rk-menu__link">[Gia sư]</a>
        </p>
        
    </div>
</div>
<?php
    }
?>
<script type="text/javascript">
$(document).ready(function() {
    $( ".andi" ).click(
      function() {
        $("#pop-up").addClass( "hidden" );
      }
    );
  }); 

</script>

<script src="{{$urlPublic}}/js/main.js"></script>

@endsection