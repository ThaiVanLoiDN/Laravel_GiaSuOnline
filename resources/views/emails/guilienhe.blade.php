<?php 
$website = getenv('APP_URL');
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Cập nhật liên hệ - GiaSuOnline</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Liên hệ từ GiaSuOnline</h1>
	<p>Bạn nhận được liên hệ GiaSuOnline</p>
	<p>Tên: {{$username}}</p>
	<p>Email: {{$email}}</p>
	<p>Số điện thoại: {{$phone}}</p>
	<p>Nội dung: {{$noidung}}</p>
	<hr>

	<p><a href="{{$website.route('public.index.index')}}">Gia sư Online</a></p>
</body>
</html>