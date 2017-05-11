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
	<p>Bạn có một lời đề nghị từ phụ huynh {{$fullname_ph}}</p>

	<p>Bạn vui lòng đăng nhập vào website để có thể đồng ý, hoặc hủy lời đề nghị này.</p>
	<p><a href="{{$website.route('public.index.index')}}">Gia sư Online</a></p>
</body>
</html>