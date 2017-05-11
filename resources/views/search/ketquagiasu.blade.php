@extends('templates.public.template')
@section('main')

<?php 
$urlPublic = getenv('PUBLIC_TEMPLATE_URL');
 ?>
<?php 
  
    $id_quan = $arInfoSearch['id_quan'];
    $id_lop = $arInfoSearch['id_lop'];
    $id_mon = $arInfoSearch['id_mon'];
 ?>
<!-- Tìm kiếm gia sư -->

<section class="white-bg">
  <div class="container">
    <div class="row">
      <h3 class="section-main">KẾT QUẢ TÌM KIẾM GIA SƯ</h3>
    </div> 
    <div class="row">
      <div class="text-center tim-kiem">
        <form class="form-inline" action="" method="post" novalidate="novalidate" >
          <div class="form-group">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
           <label for="sel1">Quận/Huyện: </label>
            <select class="form-control select2" name="id_quan">
                <?php foreach ($arQuanHuyens as $key => $arQuanHuyen): 
                    $id_quan1 = $arQuanHuyen['id_quan'];
                    $tenquan1 = $arQuanHuyen['tenquan'];

                    $sel = "";
                    if($id_quan == $id_quan1){
                      $sel = 'selected';
                    }
                ?>
                <option value="{{$id_quan1}}" {{$sel}}>{{$tenquan1}}</option>
               <?php endforeach ?>
            </select>
          </div>
         <div class="form-group">
           <label for="sel1">Lớp: </label>
            <select class="form-control select2" name="id_lop">
              <?php foreach ($arLopHocs as $key => $arLopHoc): 
                    $id_lop1 = $arLopHoc['id_lop'];
                    $tenlop1 = $arLopHoc['tenlop'];

                    $sel = "";
                    if($id_lop == $id_lop1){
                      $sel = 'selected';
                    }
                ?>
                <option value="{{$id_lop1}}" {{$sel}}>{{$tenlop1}}</option>
               <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
           <label for="sel1">Môn: </label>
            <select class="form-control select2" name="id_mon">
              <?php foreach ($arMonHocs as $key => $arMonHoc): 
                    $id_mon1 = $arMonHoc['id_mon'];
                    $tenmon1 = $arMonHoc['tenmon'];

                    $sel = "";
                    if($id_mon == $id_mon1){
                      $sel = 'selected';
                    }
                ?>
              <option value="{{$id_mon1}}" {{$sel}}>{{$tenmon1}}</option>
              <?php endforeach ?>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Tìm kiếm</button>
        </form>
      </div>
    </div> <!-- end .row -->
  <!-- Kết thúc tìm kiếm -->
      <div class="row text-center ket-qua">
        <?php
        if(!count($arSelects)){
          ?>
          <div class="khong-co">
            <h2>Không có kết quả tìm kiếm nào</h2>
            <p><img src="{{$urlPublic}}/img/search.png" class="img-responsive img-center"></p>
            <h3>Bạn vui lòng tìm kiếm thay đổi các giá trị cần tìm kiếm</h3>
          </div>
          <?php
        }
        ?>
        <?php foreach ($arSelects as $key => $arSelect): 
          $username_gs = $arSelect['username_gs'];
          $fullname_gs = $arSelect['fullname_gs'];
          $img_gs = $arSelect['img_gs'];
          $diem = $arSelect['diem'];

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

      <?php
        if($key %4 == 3){
      ?>
      </div>
      <div class="row text-center ket-qua">
      <?php 
      } 
      endforeach ?>


      </div>

    </div>

    
 </section> 


@endsection