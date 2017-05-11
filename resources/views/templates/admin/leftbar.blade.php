<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
<div class="templatemo-sidebar">
  <header class="templatemo-site-header">
    <div class="square"></div>
    <h1><a href="{{route('admin.index.index')}}">Admin</a></h1>
  </header>
  <div class="profile-photo-container">
    <a href="{{route('admin.index.index')}}">
      <img src="{{$urlAdmin}}/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
    </a>
    <div class="profile-photo-overlay">
      <a href="{{route('admin.index.index')}}">
      <img src="{{$urlAdmin}}/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
    </a>
    </div>
  </div>
  <div class="mobile-menu-icon">
      <i class="fa fa-bars"></i>
    </div>
  <nav class="templatemo-left-nav">          
    <ul>

      <?php 
        if (Session::has('arSmod')){
      ?>
      <li><a href="{{route('admin.giasu.index')}}"><i class="fa fa-graduation-cap fa-fw"></i>Gia sư</a></li>
      <li><a href="{{route('admin.phuhuynh.index')}}"><i class="fa fa-user fa-fw"></i>Phụ huynh</a></li>
      <li><a href="{{route('admin.comment.index')}}"><i class="fa fa-comment fa-fw"></i>Comment gia sư</a></li>
      <?php
        }
      ?>
      <li><a href="{{route('admin.commentbv.index')}}"><i class="fa fa-comment fa-fw"></i>Comment bài viết</a></li>
      <li><a href="{{route('admin.news.index')}}"><i class="fa fa-book fa-fw"></i>Bài viết - Chuyên mục</a></li>
      <li><a href="{{route('admin.caplop.index')}}"><i class="fa fa-folder-open fa-fw"></i>Cấp - Lớp - Môn học</a></li>
      <li><a href="{{route('admin.quangcao.index')}}"><i class="fa fa-money fa-fw"></i>Quảng cáo</a></li>
      <li><a href="{{route('admin.gioithieu.index')}}"><i class="fa fa-info-circle fa-fw"></i>Giới thiệu web</a></li>
      <li><a href="{{route('admin.slide.index')}}"><i class="fa fa-sliders fa-fw"></i>Slider Home</a></li>
       <!-- class="active" -->
    </ul>  
  </nav>
</div>

