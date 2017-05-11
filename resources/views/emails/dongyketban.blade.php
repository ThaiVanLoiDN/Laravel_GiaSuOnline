<?php 
$website = getenv('APP_URL');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lời đề nghị từ phụ huynh - GiaSuOnline</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Lời đề nghị từ phụ huynh</h1>
	<p>Gia sư {{$fullname_gs}} đã đồng ý lời đề nghị của bạn</p>

	<p>Bạn vui lòng đăng nhập vào website để có thể đồng ý, hoặc hủy lời đề nghị này.</p>
	<p><a href="{{$website.route('public.index.index')}}">Gia sư Online</a></p>
</body>
</html>