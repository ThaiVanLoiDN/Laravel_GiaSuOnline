<?php 
$website = getenv('APP_URL');
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Đăng ký thành công - GiaSuOnline</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Chúc mừng bạn đã đăng ký thành công tài khoản tại GiaSuOnline</h1>
	<p>Chúc mừng bạn đã đăng ký tài khoản thành công tại website GiaSuOnline. Đây là tài khoản của khoản của bạn:</p>
	<p>Tên đăng nhập: {{$username}}</p>
	<p>Mật khẩu: {{$password}}</p>
	<p>Để kích hoạt và nạp tài khoản, bạn vui lòng liên hệ với quản trị viên qua email: thaivanloidn@gmail.com để có thể sử dụng các chức năng của website</p>

	<p><a href="{{$website.route('public.index.index')}}">Gia sư Online</a></p>
</body>
</html>