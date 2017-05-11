<?php 
$urlPublic = getenv('PUBLIC_TEMPLATE_URL');
$Website = getenv('APP_URL');
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>
        <?php if(isset($titleSeo)){ echo $titleSeo.' - ';} ?>
        Gia sư Online
    </title>

    <!-- google font  -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{$urlPublic}}/css/reset.css">
    <link href="{{$urlPublic}}/css/font-awesome.min.css" rel="stylesheet">
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/ico" href="{{$urlPublic}}/img/favicon.ico" />
    <link rel="icon" href="{{$urlPublic}}/img/favicon.ico" sizes="32x32" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta name="robots" content="noodp"/>
    <meta name="keywords" content="gia sư"/>
    <link rel="canonical" href="{{$Website}}" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Gia Sư Online" />
    <?php if(isset($motaSeo)){ 
        ?>
    <meta property="og:description" content="{{$motaSeo}}" />
    <meta name="description" content="{{$motaSeo}}"/>
    <?php
        }else{
    ?>
    <meta name="description" content="Tìm kiếm gia sư Đà Nẵng, gia sư, phụ huynh"/>
    <meta property="og:description" content="Gia sư online - Tìm kiếm gia sư hàng đầu tại Đà Nẵng - Tiện lợi, nhanh chóng, tiết kiệm chi phí" />
    <?php
        }
    ?>
    
    <meta property="og:url" content="{{$Website}}" />
    <meta property="og:site_name" content="Gia sư" />

    <link href="{{$urlPublic}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{$urlPublic}}/css/messsages.css" rel="stylesheet">
    <link rel="stylesheet" href="{{$urlPublic}}/css/animate.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="{{$urlPublic}}/css/inbox.css">
    <link rel="stylesheet" href="{{$urlPublic}}/css/select2.min.css">
    <link rel="stylesheet" href="{{$urlPublic}}/css/style.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{$urlPublic}}/js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{$urlPublic}}/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="{{$urlPublic}}/js/jquery.validate.js"></script>
    <script src="{{$urlPublic}}/js/validate.js"></script>
    <script src="{{$urlPublic}}/js/script.js"></script>
</head>

<body>
    <div id="wrapper">
        <header id="header" class="header">
            <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
                <!-- <nav id="mainNav" class="navbar navbar-default navbar-custom  affix"> -->
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <a href="/" class="navbar-brand">
                                <img class="img-responsive" src="{{$urlPublic}}/img/logo.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Tất cả -->
                            <li class="rk-menu__item"><a href="javascript:void(0)" data-toggle="modal" data-target="#contact">Liên hệ</a>
                            </li>
                            <li class="rk-menu__item"><a href="{{route('public.news.index')}}" title="Bài viết">Bài viết</a>
                            </li>

                            <!-- Chưa đăng nhập -->
                            <?php 
                                if (!Session::has('arLoginGiaSu') && !Session::has('arLoginPhuHuynh')){
                            ?>

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Đăng nhập<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li class="text-center"><a href="javascript:void(0)" data-toggle="modal" data-target="#dangnhap">[Phụ huynh]</a></li>
                                <li class="text-center"><a href="javascript:void(0)" data-toggle="modal" data-target="#login">[Gia sư]</a></li>
                              </ul>
                            </li>

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Đăng ký<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li class="text-center"><a href="{{route('public.member.dangky')}}">[Phụ huynh]</a></li>
                                <li class="text-center"><a href="{{route('public.member.signup')}}" class="rk-menu__link">[Gia sư]</a></li>
                              </ul>
                            </li>

                            <?php
                                }
                            ?>

                             <!-- Gia sư -->
                            <?php 
                                if (Session::has('arLoginGiaSu')){
                            ?>

                            <li class="rk-menu__item"><a href="{{route('public.member.myprofile')}}" class="rk-menu__link">Trang của tôi</a>
                            </li>

                            <li class="rk-menu__item"><a href="{{route('public.member.notification')}}" class="rk-menu__link" title="Thông báo">Thông báo</a>
                            </li>
                            <li class="rk-menu__item"><a href="{{route('public.member.logout')}}" class="rk-menu__link">Đăng xuất</a>
                            </li>

                            <?php
                                }
                            ?>

                            <!-- Phụ huynh -->
                            <?php 
                                if (Session::has('arLoginPhuHuynh')){
                            ?>

                            <li class="rk-menu__item"><a href="{{route('public.member.editinfo')}}" class="rk-menu__link">Chỉnh sửa thông tin</a>
                            </li>

                            <li class="rk-menu__item"><a href="{{route('public.member.thongbao')}}" class="rk-menu__link" title="Thông báo">Thông báo</a>
                            </li>
                            <li class="rk-menu__item"><a href="{{route('public.member.logout')}}" class="rk-menu__link">Đăng xuất</a>
                            </li>

                            <?php
                                }
                            ?>
                            
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </header>
        
        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header tieu-de-dang-nhap">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title " id="myModalLabel">Đăng nhập gia sư</h4>
                    </div>
                    <div class="modal-body form-dang-nhap">
                        <form action="{{route('public.member.login')}}" method="POST" role="form" id="dangnhapgs">
                            <div class="form-group">
                                <label for="">Tên đăng nhập</label>
                                <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập">
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" name="login" value="Đăng nhập">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Phụ huynh đăng nhập -->
        <!-- Modal -->
        <div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-labelledby="PhuHuynhDangNhap">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header tieu-de-dang-nhap">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title " id="PhuHuynhDangNhap">Đăng nhập phụ huynh</h4>
                    </div>
                    <div class="modal-body form-dang-nhap">
                        <form action="{{route('public.member.dangnhap')}}" method="POST" role="form" id="dangnhapph">
                            <div class="form-group">
                                <label for="">Tên đăng nhập</label>
                                <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập">
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" name="login" value="Đăng nhập">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header tieu-de-dang-nhap">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title " id="myModalLabel">Liên hệ với admin</h4>
                    </div>
                    <div class="modal-body form-dang-nhap">
                        <form id="formlienhe" action="{{route('public.index.lienhe')}}" method="POST" role="form">
                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" class="form-control" name="username" placeholder="Nhập họ và tên">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập email">
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" placeholder="Nhập số điên thoại">
                            </div>
                            <div class="form-group">
                                <label for="">Nội dung</label>
                                <textarea class="form-control" name="noidung" placeholder="Nhập nội dung muốn gửi" rows="3"></textarea>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" name="login" value="Gửi liên hệ">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 76px; "></div>