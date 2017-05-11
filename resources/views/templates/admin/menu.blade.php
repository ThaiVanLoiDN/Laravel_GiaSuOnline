<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
<!-- Main content --> 
  <div class="templatemo-content col-1 light-gray-bg">
    <div class="templatemo-top-nav-container">
      <div class="row">
        <nav class="templatemo-top-nav col-lg-12 col-md-12">
          <ul class="text-uppercase">
            <?php 
              if (Session::has('arAdmin')){
            ?>
            <li><a href="{{route('admin.quantri.index')}}">Ban quản trị</a></li>
            <?php
              }
            ?>
            <li><a href="{{route('admin.lienhe.index')}}">Liên hệ</a></li>
            <li><a href="{{route('admin.quantri.logout')}}">Đăng xuất</a></li>
          </ul>  
        </nav> 
      </div>
    </div>